module.exports = {
    drawTriangle: function(limit){
        for(let i = 0; i < limit; i++){
            let display = '';
            for(let j = 0; j <= i; j++){
                display += '$';
            }
            console.log(display);
        }
    }
}