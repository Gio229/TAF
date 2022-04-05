module.exports = {
    countGs: function(str){
        let nbG = 0;
        
        for(let i = 0; i < str.length; i++){
            if(str.charAt(i) == 'G'){
                nbG++;
            }
        }

        return nbG;
    }
}