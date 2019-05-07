

function addTeam(ctx, x1, x2, y, teamName) {
    ctx.beginPath();
    ctx.moveTo(x1, y);
    ctx.lineTo(x2, y);
    ctx.stroke();
    ctx.fillText(teamName, x1, y);

}

var teamBlank = "";
var c2 = document.getElementById("canvas4");
var ctx = c2.getContext("2d");
var x1 = 50;
var x2 = 200;
var yAxis = [300];
ctx.font = "30px Arial";

//Test shows file is running and accessing teams correctly, but nothing prints on canvas
// yAxis.forEach((a, i) => addTeam(ctx, r1x1, r1x2, a, teamsBR4[i].name));
yAxis.forEach((a, i) => addTeam(ctx, x1, x2, a, teamBlank));

