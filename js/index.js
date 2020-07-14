let collapse = document.getElementById('collapse');
    let button = document.getElementById('btn-toggle');
    // let imgs =  document.getElementById('img')
    let close = document.getElementById('close');
    let box = document.getElementById('btn-togglea');
    let section = document.getElementById('section');
    let content = document.getElementById('box-text')

    button.addEventListener('click', function(){
        if(collapse.style.display= 'none'){
            // console.log('click')
            collapse.classList.remove('d-none')
            collapse.style.display='flex';
            close.style.display='flex';
            box.style.display='none';
            
            // close.style.float='right';
            // section.style.backgroundColor='rgb(62, 145, 145)'
            // box.style.top = '0rem';
            // content.style.color='transparent'
        }
    })

    close.addEventListener('click', function(){
        if (close.style.display='flex'){
            collapse.classList.add('d-none')
            collapse.style.display='none'
            close.style.display='none';
            box.style.display='flex';
            // section.style.backgroundColor='#000'
            // box.style.top = '15rem';
        }
    })
    // $(document).ready(function(){
    //     $('.toggle-collapse').click(function(){
    //         $('.navbar-collapse').toggleClass('collapse')
    //     })
    // })