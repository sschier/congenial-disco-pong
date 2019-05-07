

function addTeam(ctx, x1, x2, y, teamName) {
    ctx.beginPath();
    ctx.moveTo(x1, y);
    ctx.lineTo(x2, y);
    ctx.stroke();
    ctx.fillText(teamName, x1, y);

}


var c = document.getElementById("canvas1");
var ctx = c.getContext("2d");
var r1x1 = 50;
var r1x2 = 200;
var yAxis = [50, 100, 200, 250, 350, 400, 500, 550];
ctx.font = "30px Arial";


yAxis.forEach((a, i) => addTeam(ctx, r1x1, r1x2, a, teamsBR1[i].name));

