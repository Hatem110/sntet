function checkLogMode(logMode) {

     let mpInput = document.querySelector(`.mpInput`);
     let flag = document.querySelector(`.flags`);
     let modeBtn = document.querySelector(`.${logMode}`);
     modeBtn.style.backgroundColor = `transparent`;
     modeBtn.style.color = `#008685`;
     if (logMode == `phone`) {
          modeBtn = document.querySelector(`.mail`);
          modeBtn.style.backgroundColor = `#008685`;
          modeBtn.style.color = `white`;
          mpInput.placeholder = `رقم الهاتف`;
          mpInput.type = `number`;
          flag.style.display = `flex`;
     }
     else {
          modeBtn = document.querySelector(`.phone`);
          modeBtn.style.backgroundColor = `#008685`;
          modeBtn.style.color = `white`;
          mpInput.placeholder = `البريد الالكتروتي`;
          mpInput.type = `text`;
          flag.style.display = `none`;
     }
}