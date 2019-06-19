var numSum = 0;
var index;

for (index = 2; index < process.argv.length; index++) {
    numSum += Number(process.argv[index]);
}

console.log(numSum);