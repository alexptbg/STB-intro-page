$(document).ready(function() {
  $("#title").focus();
  $("#text").autosize();
});
var outputConsole = document.querySelector("#console");
outputConsole.style.height = ((window.innerHeight / 2) * 1 - 40 )+ 'px';
outputConsole.style.top = window.innerHeight / 2 + 'px';
var commandStart = [
    'Performing DNS Lookups for',
    'Searching ',
    'Analyzing ',
    'Estimating Approximate Location of ',
    'Compressing ',
    'Requesting Authorization From : ',
    'wget -a -t ',
    'tar -xzf ',
    'Entering Location ',
    'Compilation Started of ',
    'Downloading ',
    'Generating MAC addresses '
  ],
  commandParts = ['Data Structure',
    'Loading STB iptv servers ',
    'Texture',
    'TPS Reports',
    ' .... Searching ... ',
    'Checking server vulnerabilities ',
    'Checking server for holes '
  ],
  commandResponses = ['Authorizing ',
    'Authorized...',
    'Access Granted..',
    'Going Deeper....',
    'Compression Complete.',
    'Compilation of Data Structures Complete..',
    'Entering Security Console...',
    'Encryption Unsuccesful Attempting Retry...',
    'Waiting for response...',
    '....Searching...',
    'Calculating Space Requirements '
  ],
  isProcessing = false,
  processTime = 0,
  lastProcess = 0;
function consoleOutput() {
  var textEl = document.createElement('p');
  if (isProcessing) {
    textEl = document.createElement('span');
    textEl.textContent += Math.random() + " ";
    if (Date.now() > lastProcess + processTime) {
      isProcessing = false;
    }
  } else {
    var commandType = ~~(Math.random() * 4);
    switch (commandType) {
      case 0:
        textEl.textContent = commandStart[~~(Math.random() * commandStart.length)] + commandParts[~~(Math.random() * commandParts.length)];
        break;
      case 3:
        isProcessing = true;
        processTime = ~~(Math.random() * 5000);
        lastProcess = Date.now();
      default:
        textEl.textContent = commandResponses[~~(Math.random() * commandResponses.length)];
        break;
    }
  }
  outputConsole.scrollTop = outputConsole.scrollHeight;
  outputConsole.appendChild(textEl);
  if (outputConsole.scrollHeight > window.innerHeight) {
    var removeNodes = outputConsole.querySelectorAll('*');
    for (var n = 0; n < ~~(removeNodes.length / 3); n++) {
      outputConsole.removeChild(removeNodes[n]);
    }
  }
  setTimeout(consoleOutput, ~~(Math.random() * 200));
}
setTimeout(function() {
  outputConsole.style.height = ((window.innerHeight / 2) * 1 - 40 )+ 'px';
  outputConsole.style.top = window.innerHeight / 2 + 'px';
  consoleOutput();
},200);
window.addEventListener('resize', function() {
  outputConsole.style.height = ((window.innerHeight / 2) * 1 - 40 )+ 'px';
  outputConsole.style.top = window.innerHeight / 2 + 'px';
});