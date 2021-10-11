
    
const searchByTypesBtns=document.getElementById('searchByTypesBtns')
const searchCity=document.getElementById('search-city')
const searchArea=document.getElementById('search-area')

searchByTypesBtns.childNodes[1].classList.add('grey-bg')
for(let child of searchByTypesBtns.children){
   child.addEventListener('click',()=>{
       turnOthersToWhite()
       displayCorrectSearchFields(child)
       child.classList.add('grey-bg')
   })
}

const turnOthersToWhite=()=>{
    for(let child of searchByTypesBtns.children){
        if(child.classList.contains('grey-bg'))
            child.classList.remove('grey-bg')
    }
}
const displayCorrectSearchFields=(btn)=>{
    switch(btn.id){
        case "search-city-btn":
            searchCity.classList.remove('display-none')
            searchArea.classList.add('display-none')
            break;
        case "search-area-btn":
            searchCity.classList.add('display-none')
            searchArea.classList.remove('display-none')
            break;
    }
}


//********************************************//search by city//*************************************

  const citiesDropDown=document.getElementById("citiesDropDown") 
  const citySearchField=document.getElementById("citySearchField")
  const neighborhoodSearchField=document.getElementById("neighborhoodSearchField")
  const body= document.getElementsByTagName('body')[0]
  const citiesNames=[]
  let matchCities=undefined
  let searchValue=citySearchField.value


  fetch('https://data.gov.il/api/3/action/datastore_search?resource_id=5c78e9fa-c2e2-4771-93ff-7f400a12f7ba&limit=1260')
      .then((res) => {
          if (res.ok)
              return res.json()
          else
              throw new Error(res, status)

      })
      .then((data) => {
          const cities=data.result.records;
          for(let city of cities){
              citiesNames.push(Object.values(city)[2].trim())
      
          }
         
      }).catch((err) => {
          console.log(err)
      })


      citySearchField.addEventListener('keyup',()=>{
        searchValue=citySearchField.value
        if(searchValue.length>=2){
             removeAllChildren(citiesDropDown)
             matchCities=getCitiesMatchTheSearch(searchValue)
             if(matchCities.length>0)
                citiesDropDown.classList.remove('display-none') 
             let i=0;   
             for(let city of matchCities){
                 i++
                 if(i<=5){
                    let cityInDropDown=document.createElement('div');
                    cityInDropDown.classList.add('padding-8-4')
                    city= city.replace(')', '')
                    city= city.replace('(', '')
                    cityInDropDown.innerText=city
                    
                    cityInDropDown.innerHTML= boldSearchValue(cityInDropDown,searchValue)
                    citiesDropDown.appendChild(cityInDropDown)
    
                    cityInDropDown.addEventListener('click',()=>{
                        citySearchField.value=cityInDropDown.innerText
                        if(isCitySearchFieldValueaValid(citySearchField,matchCities))
                            neighborhoodSearchField.disabled=false
                        else
                            neighborhoodSearchField.disabled=true
                        citiesDropDown.classList.add('display-none')
                    })
                 }
            
             }
         }
         else
             citiesDropDown.classList.add('display-none')   
      })


      const getCitiesMatchTheSearch=(searchValue)=>{
          let matchCities=[]
          for (let city of citiesNames){
              if (city.includes(searchValue)){
                  matchCities.push(city)
              }
                  
          }
          
          return matchCities
      }

      const removeAllChildren=(div)=>{
         while(div.firstChild)
            div.removeChild(div.lastChild);
      }

      const boldSearchValue=(cityDiv,subStr)=>{
          let result=cityDiv.innerText
          result= result.replace(subStr, '<span class="font-weight-bold">' + subStr + '</span>')
          return result
      }

      body.addEventListener("click",()=>{
        citiesDropDown.classList.add('display-none')
      })

      citySearchField.addEventListener("blur",()=>{
          if(isCitySearchFieldValueaValid(citySearchField,matchCities))
             neighborhoodSearchField.disabled=false
          else
             neighborhoodSearchField.disabled=true
      })

      const isCitySearchFieldValueaValid=(citySearchField,matchCities)=>{
          if(matchCities){
            for(let city of matchCities)
            if(city===citySearchField.value)
                return true
            return false
          }
          return false
      }



      //********************************************//search by area//*************************************


      var ExcelToJSON = function() {

        this.parseExcel = function(file) {
          var reader = new FileReader();
      
          reader.onload = function(e) {
            var data = e.target.result;
            var workbook = XLSX.read(data, {
              type: 'binary'
            });
      
            workbook.SheetNames.forEach(function(sheetName) {
              // Here is your object
              var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
              var json_object = JSON.stringify(XL_row_object);
              console.log(json_object);
      
            })
      
          };
      
          reader.onerror = function(ex) {
            console.log(ex);
          };
      
          reader.readAsBinaryString(file);
        };
      };


      ////////////////////////////advanced serch//////////////////////////

      const advancedSearchBtnOpen=document.getElementById("advancedSearchBtnOpen")
      const advancedSearchBtnClose=document.getElementById("advancedSearchBtnClose")
      const advancedSearch=document.getElementById('advancedSearch')
      
      advancedSearchBtnOpen.addEventListener('click',()=>{
        advancedSearch.classList.remove('display-none')
        window.scrollTo(0,advancedSearchBtnOpen.offsetTop-200);
        advancedSearchBtnOpen.classList.add('display-none')
        advancedSearchBtnClose.classList.remove('display-none')
      })

      advancedSearchBtnClose.addEventListener('click',()=>{
        advancedSearch.classList.add('display-none')
        advancedSearchBtnOpen.classList.remove('display-none')
        advancedSearchBtnClose.classList.add('display-none')
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


      