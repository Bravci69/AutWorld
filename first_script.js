const month = ["January","February","March","April","May","Jun","July","August","September","October","November","December"];

const d= new Date();
document.write("Today is  ");
document.write(" ");
document.write(month[d.getMonth()]);
document.write(" ");
document.write(d.getDate());
document.write(". ");
document.write(d.getFullYear());
