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
const subCategoriesBtns=document.getElementsByClassName('subCategoriesBtn')
const subCategoriesCloseMode=document.getElementById('subCategoriesCloseMode')
const step2Items=document.getElementById("step2Items")

const closePublishCategoriesBtns=()=>{
    publishCategoriesBtns.classList.add('display-none')
}
const openSubCategories=()=>{
    subCategoriesContainer.classList.remove('display-none')
}

const closeSubCategories=()=>{
    subCategoriesContainer.classList.add('display-none')
}

for (let btn of subCategoriesBtns){
    btn.addEventListener('click',()=>{
         openAdressContainer()
         closeSubCategories()
    })
}



//step3
const adressContainer=document.getElementById('adressContainer')
const openDetailsContainerBtn=document.getElementById('openDetailsContainerBtn')
const backToSubCatBtn=document.getElementById('backToSubCatBtn')
const openAdressContainer=()=>{
    adressContainer.classList.remove('display-none')
}
const closeAdressContainer=()=>{
    adressContainer.classList.add('display-none')
}
openDetailsContainerBtn.addEventListener("click",()=>{
    openDetailsContainer()
    closeAdressContainer()
})
backToSubCatBtn.addEventListener('click',()=>{
    closeAdressContainer()
    openSubCategories()
})


//step4
const detailscontainer=document.getElementById('detailscontainer')
const openPaymentAndDatesBtn=document.getElementById('openPaymentAndDatesBtn')
const backToAdressBtn=document.getElementById('backToAdressBtn')
const radioHiddenInputs=document.getElementsByClassName('radioHiddenInput')
const detailsHiddenInputs=document.getElementsByClassName('detailsHiddenInput')

const openDetailsContainer= ()=>{
    detailscontainer.classList.remove('display-none')
}

const closeDetailsContainer= ()=>{
    detailscontainer.classList.add('display-none')
}
openPaymentAndDatesBtn.addEventListener("click",()=>{
    openPaymentAndDatesContainer()
    closeDetailsContainer()
})

backToAdressBtn.addEventListener('click',()=>{
    closeDetailsContainer()
    openAdressContainer()
})

for (let element of radioHiddenInputs){
    element.value=false
    element.parentElement.addEventListener('click',()=>{
        makeAllElementsValueFalse()
        element.value=true
        changeEelementsBgColor()
        element.value==="true"?element.parentElement.classList.add("grey-bg"):element.parentElement.classList.remove("grey-bg") 
    })
}
const makeAllElementsValueFalse=()=>{
    for (let element of radioHiddenInputs){
        element.value=false
    }
}
const changeEelementsBgColor=()=>{
    for (let element of radioHiddenInputs){
        element.value==="true"?element.parentElement.classList.add("grey-bg"):element.parentElement.classList.remove("grey-bg") 
    }
}
for (let element of detailsHiddenInputs){
    element.value=false
    element.parentElement.addEventListener('click',()=>{
        element.value=element.value==="true"?false:true
        element.value==="true"?element.parentElement.classList.add("grey-bg"):element.parentElement.classList.remove("grey-bg") 
    })
}

//step5
const paymentAndDatesContainer=document.getElementById('paymentAndDatesContainer')
const openImagesAndVideoBtn=document.getElementById('openImagesAndVideoBtn')
const backTodetailsBtn=document.getElementById('backTodetailsBtn') 

const openPaymentAndDatesContainer= ()=>{
    paymentAndDatesContainer.classList.remove('display-none')
}
const closePaymentAndDatesContainer= ()=>{
    paymentAndDatesContainer.classList.add('display-none')
}
openImagesAndVideoBtn.addEventListener("click",()=>{
    openImagesAndVideoContainer()
    closePaymentAndDatesContainer()
})

backTodetailsBtn.addEventListener('click',()=>{
    closePaymentAndDatesContainer()
    openDetailsContainer()
})

//step6
const imagesAndVideoContainer=document.getElementById('imagesAndVideoContainer')
const openContactDetailsBtn=document.getElementById('openContactDetailsBtn')
const backToPaymentAndDatesBtn =document.getElementById('backToPaymentAndDatesBtn')


const openImagesAndVideoContainer= ()=>{
    imagesAndVideoContainer.classList.remove('display-none')
}
const closeImagesAndVideoContainer= ()=>{
    imagesAndVideoContainer.classList.add('display-none')
}
openContactDetailsBtn.addEventListener("click",()=>{
    openContactDetailsContainer()
    closeImagesAndVideoContainer()
})
backToPaymentAndDatesBtn.addEventListener('click',()=>{
    closeImagesAndVideoContainer()
    openPaymentAndDatesContainer()
})

//step7
const contactDetailsContainer=document.getElementById("contactDetailsContainer")
const openPubishPreferenceBtn=document.getElementById('openPubishPreferenceBtn')
const backToImagesAndVideoBtn=document.getElementById('backToImagesAndVideoBtn')

const openContactDetailsContainer =()=>{
    contactDetailsContainer.classList.remove('display-none')
}

const closeContactDetailsContainer =()=>{
    contactDetailsContainer.classList.add('display-none')
}
openPubishPreferenceBtn.addEventListener('click',()=>{
    openPubishPreferenceContainer()
    closeContactDetailsContainer()
})

//step8
const pubishPreferenceContainer=document.getElementById("pubishPreferenceContainer")
const backToContactDetailsBtn= document.getElementById("backToContactDetailsBtn")
const adPublishForm=document.getElementById('adPublishForm')
const regularAdBtn=document.getElementById("regularAdBtn")


const openPubishPreferenceContainer =()=>{
    pubishPreferenceContainer.classList.remove('display-none')
}
const closePubishPreferenceContainer =()=>{
    pubishPreferenceContainer.classList.add('display-none')
}

regularAdBtn.addEventListener("click",()=>{
    adPublishForm.submit()
})



