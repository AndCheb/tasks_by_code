const bytes = 10000; // file size in bytes
const fullKilobytes = Math.floor(bytes / 1024); // number of full kilobytes

// this function converts bytes to full kilobytes
const bytesToFullKilobytes = bytes => Math.floor(bytes / 1024);