var reader;
var progress = document.querySelector('.percent');
lines = new Array();
function handleFileSelect(e) {
  /* 選取檔案後重設進度條 */
  progress.style.width = '0%';
  progress.textContent = '0%';

  reader = new FileReader();
  reader.onerror = errorHandler;
  reader.onprogress = updateProgress;

  reader.onloadstart = function(e) {
    document.getElementById('progress_bar').className = 'loading';
  };
  reader.onload = function(e) {
    /* 檔案上傳完成後，進度條顯示為100% */
    progress.style.width = '100%';
    progress.textContent = '100%';
    setTimeout("document.getElementById('progress_bar').className='';", 5000);
    lines = this.result.split('\n');
    analysis();
  }

  /* 讀取檔案內容文字(讀取結果將會存到reader的result屬性) */
  reader.readAsText(e.target.files[0]);
}

function errorHandler(e) {
  switch(e.target.error.code) {
    case e.target.error.NOT_FOUND_ERR:
      alert('找不到檔案!');
      break;
    case e.target.error.NOT_READABLE_ERR:
      alert('不支援此檔案格式!');
      break;
    default:
      alert('上傳過程中發生錯誤!');
  };
}

function updateProgress(e) {
  if (e.lengthComputable) {
    var percentLoaded = Math.round((e.loaded / e.total) * 100); 
    /* 若檔案上傳未完成，依上傳進度改變顯示進度條%數 */
    if (percentLoaded < 100) {
      progress.style.width = percentLoaded + '%';
      progress.textContent = percentLoaded + '%';
    }
  }
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);