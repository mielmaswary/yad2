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


//citys list
  const citiesDropDown=document.getElementById("citiesDropDown") 
  const citySearchField=document.getElementById("citySearchField")
  const citiesNames=[]
  let searchValue=citySearchField.value


  fetch('https://data.gov.il/api/3/action/datastore_search?resource_id=d4901968-dad3-4845-a9b0-a57d027f11ab')
      .then((res) => {
          if (res.ok)
              return res.json()
          else
              throw new Error(res, status)

      })
      .then((data) => {
          const cities=data.result.records;
          for(let city of cities){
              citiesNames.push(Object.values(city)[3].trim())
      
          }
         
      }).catch((err) => {
          console.log(err)
      })


      citySearchField.addEventListener('keyup',()=>{
        searchValue=citySearchField.value
        if(searchValue.length>=2){
             removeAllChildren(citiesDropDown)
             let matchCities=getCitiesMatchTheSearch(searchValue)
             if(matchCities.length>0)
                citiesDropDown.classList.remove('display-none') 
             for(let city of matchCities){
                let cityInDropDown=document.createElement('div');
                cityInDropDown.classList.add('padding-8-4')
                cityInDropDown.innerText=city
                cityInDropDown.innerHTML= boldSearchValue(cityInDropDown,searchValue)
                citiesDropDown.appendChild(cityInDropDown)
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