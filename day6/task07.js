module.exports = {
    arrayFiltering: function(array, test){
        
        let myArray = [];

        array.forEach(el => {
            if(test(el)){
                myArray.push(el);   
            }
        });
        return myArray;
    }
}