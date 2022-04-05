module.exports = {
    fizzBuzz: function(num){
        let display = '';
        if(!isNaN(num)){

            if(num <= 0){
                display = '';
            }
            
            for(let i = 1; i <= num; i++){

                if(i == 1){
                    display = '' + 1;
                }else{
                    if((i % 3) == 0 && (i % 5) == 0){
                        display += ', FizzBuzz';
                    }else if((i % 3) == 0){
                        display += ', Fizz';  
                    }else if((i % 5) == 0){
                        display += ', Buzz';  
                    }else{
                        display += ', ' + i;
                    }
                }
                
            }

        }
        console.log(display);
    }
}