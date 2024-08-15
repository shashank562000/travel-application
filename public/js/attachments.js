var Attachments =
{
    messageOrigin: null,
    preview: function(hasData, fileName)
    {
        // Remove existing elements, we already faced enough errors
        let cModalBody=document.body.querySelectorAll('.attachment-viewer.d-none');
        for (let i = 0; i < cModalBody.length; i++)
        {
            document.body.removeChild(cModalBody[i]);
        }

        let singlePixel='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=';
        let oModalBody=document.body.appendChild(document.createElement('div'));
        oModalBody.className='attachment-viewer d-none';
        let oImg=oModalBody.appendChild(document.createElement('div')).appendChild(document.createElement('img'));
        oImg.id="image";
        oImg.src=singlePixel;
        let oUL=oModalBody.appendChild(document.createElement('div')).appendChild(document.createElement('ul'));
        oUL.id='images';
        console.log('has data : - ', hasData)
        if(hasData)
        {
            Attachments.events.previewCallback([hasData])
        } else {

            let ids=[docID]; /* came as array when pdf was converted to jpg(s); returned multiple ids to fetch single image.
                Here is a bit different case, you'll need the Imagick extension to come into play in the backend to get the pdf-image
                id(s). As of now , we are taking only single id of the document(png,jpg).
            */
           let url = CONVERT_URL? CONVERT_URL+'/'+fileName  :'';
            $.ajax({
                url,
                success:res=>{
                    if(res.status)
                    {
                        console.log(res.data)
                    }
                    console.log(res)
                }
            })
        }
    },
    events:
    {
        previewCallback: function (data)
        {
            let oModalBody=document.querySelector('.attachment-viewer.d-none');
            let oUL=document.querySelector('.attachment-viewer.d-none ul');

            if (data.length === 0)
            {
                toast.error('Attachment not found!');
            }

            for (let i = 0; i < data.length; i++)
            {
                let oImg=oUL.appendChild(document.createElement('li')).appendChild(document.createElement('img'));
                oImg.className='rotate-0';
                oImg.id='image-'+i;
                oImg.classList.add('pending-load');
                oImg.onload=function()
                {
                    this.classList.remove('pending-load');
                    if ($('.attachment-viewer ul li img.pending-load').length === 0)
                    {
                        oModalBody.querySelector('img#image').src=oUL.querySelector('li:first-child img').src;
                        let viewer=new window.Viewer(document.getElementById('images'), {
                            title: false,
                            hide: function(e)
                            {
                                setTimeout(function(viewer)
                                {
                                    viewer.destroy();
                                    let oContainer=document.body.querySelector('div.attachment-viewer');
                                    document.body.removeChild(oContainer);
                                }, 1000, e.target.viewer);
                            }
                        });
                        if (viewer.element.querySelectorAll('img').length === 1)
                        {
                            document.body.classList.add('one-image');
                        }
                        else
                        {
                            document.body.classList.remove('one-image');
                        }
                        viewer.show();
                    }
                }
                oImg.src=data[i];
            }
        },
        load: function()
        {
            if (document.querySelector('.loading-modal') === null)
            {
                let oOuterDiv=document.body.appendChild(document.createElement('div'));
                oOuterDiv.className='modal fade loading-modal';
                oOuterDiv.tabIndex='-1';
                oOuterDiv.setAttribute('role', 'dialog');
                oOuterDiv.setAttribute('aria-hidden', 'true');

                let oDialogDiv=oOuterDiv.appendChild(document.createElement('div'));
                oDialogDiv.className='modal-dialog modal-dialog-centered';
                oDialogDiv.style.width='85px';

                let oContentDiv=oDialogDiv.appendChild(document.createElement('div'));
                oContentDiv.className='modal-content';
                oContentDiv.appendChild(document.createElement('img')).src='/hub/img/loading.gif';

                let oAnchor=document.body.appendChild(document.createElement('a'));
                oAnchor.className='d-none loading-modal-trigger';
                oAnchor.dataset.toggle='modal';
                oAnchor.dataset.target='.loading-modal';
            }
        }
    },
    print: function(id, sFunction)
    {
        let oIframe=document.querySelector('iframe[name="_print"]');
        if (oIframe === null)
        {
            oIframe=document.createElement('iframe');
            oIframe.name='_print';
            document.body.appendChild(oIframe);
        }
        oIframe.src=[axios.defaults.baseURL, sFunction, id].join('/');
    }
}

function preview(hasData=null, fileName=null)
{
    Attachments.preview( hasData, fileName=null );
}
