const mobileSideMenuModal=document.getElementById('mobileSideMenuModal')
const sideMenuBtn=document.getElementById('sideMenuBtn')

sideMenuBtn.addEventListener('click',()=>{
    mobileSideMenuModal.classList.remove('hidden-menu')
})