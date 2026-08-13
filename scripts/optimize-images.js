const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const inputDir = path.join(__dirname, '../src/img');
const outputDir = path.join(__dirname, '../web/assets/img');

if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

const files = fs.readdirSync(inputDir);

files.forEach(file => {
  const inputPath = path.join(inputDir, file);
  
  // Skip if it's not a file
  if (!fs.statSync(inputPath).isFile()) return;

  const outputPath = path.join(outputDir, path.parse(file).name + '.webp');
  
  sharp(inputPath)
    .webp({ quality: 80 })
    .toFile(outputPath)
    .then(info => {
      console.log(`Optimized: ${file} -> ${path.basename(outputPath)}`);
    })
    .catch(err => {
      console.error(`Error optimizing ${file}:`, err);
    });
});
