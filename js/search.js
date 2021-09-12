const searchByTypesBtns=document.getElementById('searchByTypesBtns')
for(let child of searchByTypesBtns.children){
   child.addEventListener('click',()=>{
       turnOthersToWhite()
       child.classList.add('grey-bg')
   })
}

const turnOthersToWhite=()=>{
    for(let child of searchByTypesBtns.children){
        if(child.classList.contains('grey-bg'))
            child.classList.remove('grey-bg')
    }
}