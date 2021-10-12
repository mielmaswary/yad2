
//main-search-btn
const prodSearchPageUrl="miel-yad2.herokuapp.com/search/search-index.php"
const devSearchPageUrl="./search/search-index.php"

const mainSearchBtn = document.getElementById('main-search')
mainSearchBtn.addEventListener('click',()=>{
    location.href=prodSearchPageUrl
})




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
    disableModalBg()
    closeAllModals()
})
const closeAllModals=()=>{
    const allModals=document.getElementsByClassName('modal-content')
    for(let modal of allModals){
        if(modal.classList.contains('moving-menu'))
            modal.classList.add('hidden-menu')
        else
            modal.classList.add('visibility-hidden')

        document.body.classList.remove('stop-scrolling')
    }
}
const enableModalBg =()=>{
    modalBg.classList.remove('visibility-hidden')
    document.body.classList.add('stop-scrolling')
}
const disableModalBg =()=>{
    modalBg.classList.add('visibility-hidden')
    document.body.classList.remove('stop-scrolling')
}
//sort and filter modals
sortIconBtn=document.getElementById('sort-icon-btn')
filterIconBtn=document.getElementById('filter-icon-btn')
sortForm=document.getElementById('sort-form')
filterForm=document.getElementById('filter-form')

modalBg=document.getElementById('modal-bg')

sortIconBtn.addEventListener('click',()=>{
    sortForm.classList.remove('visibility-hidden')
    enableModalBg()
})

filterIconBtn.addEventListener('click',()=>{
    modalBg.classList.remove('visibility-hidden')
    filterForm.classList.remove('visibility-hidden')
    document.body.classList.add('stop-scrolling')
})


//mobile-side-menu-modal
const mobileSideMenuModal=document.getElementById('mobileSideMenuModal')
const mobilsSideMenuBtn=document.getElementById('sideMenuBtn')

mobilsSideMenuBtn.addEventListener('click',()=>{
    mobileSideMenuModal.classList.remove('hidden-menu')
    enableModalBg()
})

closeBtns=document.getElementsByClassName('closeBtn')
for(let btn of closeBtns){
    btn.addEventListener('click',()=>{
        closeModal(btn.parentElement.parentElement)
        disableModalBg()
    })
}

const closeModal=(modal)=>{
    if(modal.classList.contains('moving-menu'))
        modal.classList.add('hidden-menu')
    else
        modal.classList.add('visibility-hidden')
}