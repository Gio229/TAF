module.exports = {
    objectsDeeplyEqual: function(cmp1, cmp2){
            
        if(cmp1 === null && cmp2 === null){

        }else if(cmp1 instanceof Object && cmp2 instanceof Object){
            for (key in cmp1) {
  
                if (cmp1[key] !== cmp2[key]) {
                    return objectsDeeplyEqual(cmp1[key], cmp2[key]);
                }
                
            }
        }else if(cmp1 === cmp2){
            //nothing
        }else{
            return false;
        }

        return true

    }
}