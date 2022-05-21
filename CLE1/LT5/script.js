function talkid(obj) {
    if (obj.id === 'block-2') {
        const myElement = document.getElementById('doctor-talk');
            myElement.style.display = "block";
    }else if (obj.id === 'block-3'){
         const myElement = document.getElementById('iron-talk');
            myElement.style.display = "block";       
    }else if (obj.id === 'block-5'){
         const myElement = document.getElementById('hulk-talk');
            myElement.style.display = "block";       
    }else if (obj.id === 'block-7'){
         const myElement = document.getElementById('wong-talk');
            myElement.style.display = "block";       
    }
}

function hideid(obj) {
    if (obj.id === 'block-2') {
        const myElement = document.getElementById('doctor-talk');
            myElement.style.display = "none";
    }else if (obj.id === 'block-3') {
        const myElement = document.getElementById('iron-talk');
            myElement.style.display = "none";
    }else if (obj.id === 'block-5'){
         const myElement = document.getElementById('hulk-talk');
            myElement.style.display = "none";       
    }else if (obj.id === 'block-7'){
         const myElement = document.getElementById('wong-talk');
            myElement.style.display = "none";       
    }
}