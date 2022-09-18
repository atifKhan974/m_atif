let closeIcon = document.querySelector(".close");
let menu = document.querySelector(".menu");
let header = document.querySelector(".header");
let upArrow = document.querySelector(".upArrow");
let closeImg = document.querySelector(".closeImg");
let loading = document.querySelector(".loading");
let show = document.querySelector(".show");
let wrapper = document.querySelector(".wrapper");
let circle = document.querySelector(".circle");
let link = document.querySelectorAll("a");
const images = document.querySelectorAll(".image");
let contactBtn = document.querySelector("#contactBtn");
let submitBtn = document.querySelector(".submitBtn");
let dialogContainer = document.querySelector("#dialogContainer");
let closeDialog = document.querySelector(".closeDialog");


setTimeout(() => {
    loading.classList.remove("show");
    wrapper.classList.remove("hide");
    menu.classList.remove("hideMenu");
}, 4000);



closeIcon.addEventListener("click", () => {
    header.style.left = "-500px"

})

menu.addEventListener("click", () => {
    header.style.left = "0px"
    // menu.style.display = "none"
})

window.addEventListener("scroll", function () {
    if (this.scrollY > 350) {
        upArrow.style.display = "block";
    }

    else {
        upArrow.style.display = "none";
    }

});



// images.forEach(element => {
//     element.addEventListener("click", () => {
//         // id.addEventListener("click", () => {
//         element.classList.add("fullScreen")
//         let imgParent = element.parentElement;
//         imgParent.classList.add("fullSize")
//         closeImg.style.display = "block";
//         // })
//     })
//     closeImg.addEventListener("click", () => {
//         element.classList.remove("fullScreen")
//         let imgParent = element.parentElement;
//         imgParent.classList.remove("fullSize")
//         closeImg.style.display = "none";
//     })
// });



let gsapTimeOut = setTimeout(wait, 4000);
function wait() {

    window.addEventListener("mousemove", moveCircle);


    let tl = gsap.timeline({ defaults: { duration: 1.5 } });

    tl.from('.navigation', { y: '-200%', ease: 'power3' })
        .from('.anim', { duration: 1, opacity: 0, y: -20, stagger: 0.2 }, "-=1")
        .from('.hero .img', { x: '200%' }, "-=1.5");


    gsap.from('.animAbout', {
        y: "20%",
        duration: 1,
        opacity: 0,
        scrollTrigger: {
            trigger: '.animAbout',
            // markers: true,   
            toggleActions: "restart none none none",
            start: "top 50%",
            end: "top 30%"
        }
    });

    gsap.from('.animServices', {
        y: "20%",
        duration: 1,
        opacity: 0,
        scrollTrigger: {
            trigger: '.animServices',
            // markers: true,
            toggleActions: "restart none none none",
            start: "top 60%",
            end: "top 35%"
        }
    })
    gsap.from('.animGallary', {
        scale: 0.5,
        duration: 0.7,
        opacity: 0,
        scrollTrigger: {
            trigger: '.animGallary',
            // markers: true,
            toggleActions: "restart none none none",
            start: "top 55%",
            end: "top 35%"
        }
    })

    gsap.from(".animRight", {
        x: "-100%",
        opacity: 0,
        duration: 0.5,
        stagger: 0.3,
        scrollTrigger: {
            trigger: '.animRight',
            // markers: true,
            toggleActions: "restart none none none",
            start: "top 90%",
            end: "top 80%"
        }
    })


    gsap.from('.contactBox', {
        y: "50%",
        x: "-100%",
        opacity: 0,
        duration: 1,
        ease: "back",
        stagger: 0.2,
        // delay: 4,
        scrollTrigger: {
            trigger: '.contactBox',
            // markers: true,
            toggleActions: "restart none none none",
            start: "top 90%",
            end: "top 80%"
        }
    });

    function moveCircle(e) {
        gsap.to('.circle', {
            duration: 0.3,
            x: e.clientX,
            y: e.clientY
        });
    }

    mouseEffectArray(link);
    mouseEffectArray(images);
    function mouseEffectArray(para) {
        para.forEach(element => {
            element.addEventListener("mouseenter", () => {
                circle.classList.add("active");
                console.log('hovering');

            })
        });

        para.forEach(element => {
            element.addEventListener("mouseleave", () => {
                circle.classList.remove("active");
                console.log('Not hovering');

            })
        });
    }

    mouseEffectElement(menu);
    mouseEffectElement(closeIcon);

    function mouseEffectElement(para) {
        para.addEventListener("mouseenter", () => {
            circle.classList.add("active");

        });

        para.addEventListener("mouseleave", () => {
            circle.classList.remove("active");
        })
    }

    contactBtn.addEventListener("click", (e) => {
        e.preventDefault()
        dialogContainer.classList.remove("hide");
        closeDialog.style.display = "block";
        console.log('Hello');

    })

    closeDialog.addEventListener("click", () => {
        dialogContainer.classList.add("hide");
        closeDialog.style.display = "none";
    })

    // Contact form variables
    const email = document.getElementById("email");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");


    // SMTP credentials password
    //0725ED166A9F363DEC82221B0BF7560F896C

    // SMTP token
    // d4d799ff-6b56-4129-b7f7-6a16a04fa725
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault();
        // console.log(email.value);
        // console.log(subject.value);
        // console.log(message.value);
        
        // Email.send({
        //     Host : "smtp.elasticemail.com",
        //     Username : "muhammadatifkust@gmail.com",
        //     Password : "A9EF0066EC110E37E420218033AAB97316A0",
        //     To : 'muhammadatifkust@gmail.com',
        //     From : email.value,
        //     Subject : subject.value,
        //     Body : message.value
        // }).then(
        //   message => alert(message)
        // );


        Email.send({
            SecureToken : "d4d799ff-6b56-4129-b7f7-6a16a04fa725",
            To : 'muhammadatifkust@gmail.com',
            From : email.value,
            Subject : subject.value,
            Body : message.value
        }).then(
          message => alert(message)
        );
    });


    //Script for changing the colors
    let p_200 = document.getElementById("p_200");
    let p_400 = document.getElementById("p_400");
    let p_600 = document.getElementById("p_600");
    let sec = document.getElementById("sec");

    console.log('Hello U It z working');
    
    

    document.documentElement.style.setProperty("--clr-primary-200",p_200.innerText);
    document.documentElement.style.setProperty("--clr-primary-400",p_400.innerText);
    document.documentElement.style.setProperty("--clr-primary-600",p_600.innerText);
    document.documentElement.style.setProperty("--clr-secondary",sec.innerText);
    

}