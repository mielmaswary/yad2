

//sticky header
const stickyHeader=document.getElementById('sticky-header');
let scrollBefore=0;
let scrollCurrent=0;

window.addEventListener('scroll',function(e){
    const scrollCurrent = window.scrollY;
        if(scrollCurrent > scrollBefore){
            stickyHeader.classList.add('sticky-top-40');
            stickyHeader.classList.remove('sticky-top0');   
        }
        else{
            stickyHeader.classList.remove('sticky-top-40');
            stickyHeader.classList.add('sticky-top0');
        }
        scrollBefore = scrollCurrent;
})


//////////////////////////////////////////////////modals////////////////////////////////////////////////

//modal-bg
modalBg=document.getElementById('modal-bg')

modalBg.addEventListener('click',()=>{
    modalBg.classList.add('display-none')
    closeAllModals()
})
const closeAllModals=()=>{
    const allModals=document.getElementsByClassName('modal-content')
    for(let modal of allModals){
        modal.classList.add('display-none')
        document.body.classList.remove('stop-scrolling')
    }
}
//sort and filter modals

sortIconBtn=document.getElementById('sort-icon-btn')
filterIconBtn=document.getElementById('filter-icon-btn')
sortForm=document.getElementById('sort-form')
filterForm=document.getElementById('filter-form')

modalBg=document.getElementById('modal-bg')

sortIconBtn.addEventListener('click',()=>{
    modalBg.classList.remove('display-none')
    sortForm.classList.remove('display-none')
    document.body.classList.add('stop-scrolling')
})

filterIconBtn.addEventListener('click',()=>{
    modalBg.classList.remove('display-none')
    filterForm.classList.remove('display-none')
    document.body.classList.add('stop-scrolling')
})