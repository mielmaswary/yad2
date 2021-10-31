//step1

modalBg=document.getElementById('modal-bg')
adTypeModal=document.getElementById('ad-type-modal')

const openAdTypeModal=()=>{
    modalBg.classList.remove('visibility-hidden')
    document.body.classList.add('stop-scrolling')
    adTypeModal.classList.remove('visibility-hidden')
}
const closeAdTypeModal=()=>{
    modalBg.classList.add('visibility-hidden')
    document.body.classList.remove('stop-scrolling')
    adTypeModal.classList.add('visibility-hidden')
}


const publishCategoriesBtns=document.getElementById('publish-categories-btns')
publishCategoriesBtns.children[0].addEventListener('click',()=>{
    openAdTypeModal()       
})



modalBg.addEventListener('click',()=>{
    closeAdTypeModal()
})

const adTypeModalPrivateBtn =document.getElementById('ad-type-modal-private-btn')
const adTypeModalMediatorBtn =document.getElementById('ad-type-modal-mediator-btn')

const adTypeBtns=[adTypeModalPrivateBtn,adTypeModalMediatorBtn]

for(let btn of adTypeBtns ){
    btn.addEventListener('click',()=>{
        closeAdTypeModal()
        closePublishCategoriesBtns()
        openSubCategories()
    })
}


//step2
const subCategoriesContainer=document.getElementById('subCategoriesContainer')
const subCategoriesBtns=document.getElementsByClassName('subCategoriesBtns')

const closePublishCategoriesBtns=()=>{
    publishCategoriesBtns.classList.add('display-none')
}
const openSubCategories=()=>{
    subCategoriesContainer.classList.remove('display-none')
}



//step3

//step4

//step5

//step6



