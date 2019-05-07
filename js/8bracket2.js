

function addTeam(ctx, x1, x2, y, teamName) {
    ctx.beginPath();
    ctx.moveTo(x1, y);
    ctx.lineTo(x2, y);
    ctx.stroke();
    ctx.fillText(teamName, x1, y);

}

var teamBlank = "";
var c2 = document.getElementById("canvas2");
var ctx = c2.getContext("2d");
var x1 = 50;
var x2 = 200;
var yAxis = [125, 225, 375, 475 ];
ctx.font = "30px Arial";

// yAxis.forEach((a, i) => addTeam(ctx, r1x1, r1x2, a, teamsBR2[i].name));
yAxis.forEach((a, i) => addTeam(ctx, r1x1, r1x2, a, teamBlank));

