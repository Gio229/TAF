module.exports = {
    range: function(start, end, step){

        let myarray = [];

        if( typeof(step) == 'undefined' ){
            step = 1;
        }

        if(!isNaN(start) && !isNaN(end) && !isNaN(step)){
            if((start < end) && step <= 0){

            }else if((start > end) && step >= 0){

            }else{
                if(step > 0){
                    for(let i = start; i <= end; i = i + step){
                        myarray.push(i);
                    }
                }else if(step < 0){
                    for(let i = start; i >= end; i = i + step){
                        myarray.push(i);
                    }
                }
            }
            
        }

        return myarray;
    }
}