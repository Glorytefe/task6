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


    // Animation
    // var wow = new WOW(
    //     {
    //       boxClass:     'wow',      // animated element css class (default is wow)
    //       animateClass: 'animated', // animation css class (default is animated)
    //       offset:       0,          // distance to the element when triggering the animation (default is 0)
    //       mobile:       true,       // trigger animations on mobile devices (default is true)
    //       live:         true,       // act on asynchronously loaded content (default is true)
    //       callback:     function(box) {
    //         // the callback is fired every time an animation is started
    //         // the argument that is passed in is the DOM node being animated
    //       },
    //       scrollContainer: null,    // optional scroll container selector, otherwise use window,
    //       resetAnimation: true,     // reset animation on end (default is true)
    //     }
    //   );
    //   wow.init();
      


    // typewriter effect
    
    const TypeWriter = function(txtElement, words, wait = 3000){
        this.txtElement = txtElement;
        this.words = words;
        this.txt ='';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false();
    }

    // type method
        TypeWriter.prototype.type = function(){
            // console.log('Hello');
            // current index
            const current = this.wordIndex % this.words.length;

            // get full text
            const fulltxt = this.words[current];
            
            // check if deleting
            if (this.isDeleting){
                // remove char
                this.txt = fulltxt.substring(0, this.txt.length - 1);
            }
            else {
                // add char 
                this.txt = fulltxt.substring(0, this.txt.length + 1);
            }
            // type speed
            let typeSpeed = 100;
            if (this.isDeleting) {
                typeSpeed /= 2;
            }
            // ?if txt is complete
            if (this.txt === fulltxt && !this.isDeleting){
                //  pause
                typeSpeed = this.wait;
                // delete is set to true
                this.isDeleting = true;
            } else if ( this.isDeleting && this.txt === ''){
                this.isDeleting =false;
                this.wordIndex++;
                // pause before start typing
                typeSpeed = 100;
            }
            setTimeout(() => this.type(), 250);
            // insert text
            this.txtElement.innerHTML = `<span class='txt'>${this.txt}</span>`;
        }


    // on load
    document.addEventListener('DOMContentLoaded', init);

    function init(){
        const txtElement = document.querySelector('.typing');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');
        // typewriter
        new TypeWriter(txtElement, words, wait);
    }
