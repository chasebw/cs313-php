
var total = 0;
var n = 0;
for (x in process.argv) {

    if (x != 0 && x != 1) {
        total += Number(process.argv[x]);
    }
}
console.log(total);

