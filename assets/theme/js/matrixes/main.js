var m1 = new Matrix(10, 10); // rows, cols
var m2 = new Matrix(10, 10); // rows, cols

m1.values = [
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
];
m2.values = [
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
];

var m3 = m1.multiply(m2);

console.table(m3.values);
