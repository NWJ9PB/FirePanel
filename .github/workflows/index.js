"use strict";
const fs = require("fs"),
      path = require("path"),
      child_process = require("child_process");
child_process.exec("git log --pretty=format:'{\"commit\":\"%h\",\"subject\":\"%s\",\"date\":\"%cD\",\"author\":\"%an\"},' -1", function (err, stdout) {
	if (err) throw new Error(err);
	const data = stdout.substr(0, stdout.length - 1);
	fs.writeFile(path.join(__dirname, "../../include/commit.json"), data, function (err) {
		if (err) throw new Error(err);
	});
});
console.log("Done!");