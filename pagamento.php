<!DOCTYPE html>
<!-- saved from url=(0056)https://sophiax-c9b30ad4a6f8.herokuapp.com/pagamento.php -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento via PIX</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="./Pagamento via PIX_files/css2" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
}


h1 {
  font-size: 48px;
  font-weight: bold;
  color: #333;
  margin-bottom: 30px;
}

p {
  font-size: 24px;
  color: #666;
  margin-bottom: 20px;
}

.pix-info {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.pix-info p {
  font-size: 18px;
  margin-bottom: 10px;
}

.tutorial h1 {
 color: red
}


.safepay
{
width:133px;
height:29.971830368041992px;
position:absolute;
}
.rectangle1
{
background-color:#ffffff;
height:29.971830368041992px;
width:115.2042236328125px;
border-radius:40px;
}
.vector1
{
height:11.239436149597168px;
width:17.795774459838867px;
left:10.302817344665527px;
top:10.302817344665527px;
position:absolute;
}
.safepay2
{
color:#000000;
vertical-align:text-middle;
font-size:18px;
font-family:Arial;
line-height:auto;
border-style:hidden;
outline:none;
left:1.87px;
top:6.55px;
position:absolute;
width:131.1267547607422px;
}


.pix-code {
  font-size: 44px;
  font-weight: bold;
  margin-bottom: 20px;
}

.titlePix {
  font-family: 'Arimo';
font-style: normal;
font-weight: 700;
font-size: 36px;
line-height: 41px;


color: #FF5151;
}


.pix-qrcode {
  max-width: 200px;
  margin: 0 auto;
  display: block;
  margin-bottom: 20px;
}

#valorParaPagar {
  color: #000000;
  font-size: 19px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  margin: 5px 0;
  
}
/* Estilos para o título */
#title {
  font-size: 19px;
  font-weight: bold;
  margin: 24px 0;
  color: rgb(255, 0, 0);
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
}

/* Estilos para o nome do produto */
#nome-produto {
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  font-size: 19px;
  display: inline-block;
  margin: 5px 0;
  color: rgb(83, 77, 77);

  transition: all 0.2s ease-in-out;
}

#nome-produto:hover {
  color: rgb(255, 0, 0);
  border-bottom-color: rgb(255, 0, 0);
}



#ja-paguei {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 24px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

#ja-paguei:hover {
  background-color: #3E8E41;
}

.error-message {
  color: #FF0000;
  font-weight: bold;
  margin-top: 20px;
}

@media (max-width: 768px) {
  .container {
    padding: 10px;
  }

  h1 {
    font-size: 36px;
  }

  p {
    font-size: 18px;
    margin-bottom: 10px;
  }

  .pix-info {
    padding: 10px;
  }

  .pix-code {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .pix-qrcode {
    max-width: 150px;
    margin-bottom: 10px;
  }

  #ja-paguei {
    font-size: 20px;
    padding: 8px 16px;
  }
}
  </style>
<style type="text/css">.vue-slider-dot{position:absolute;-webkit-transition:all 0s;transition:all 0s;z-index:5}.vue-slider-dot:focus{outline:none}.vue-slider-dot-tooltip{position:absolute;visibility:hidden}.vue-slider-dot-hover:hover .vue-slider-dot-tooltip,.vue-slider-dot-tooltip-show{visibility:visible}.vue-slider-dot-tooltip-top{top:-10px;left:50%;-webkit-transform:translate(-50%,-100%);transform:translate(-50%,-100%)}.vue-slider-dot-tooltip-bottom{bottom:-10px;left:50%;-webkit-transform:translate(-50%,100%);transform:translate(-50%,100%)}.vue-slider-dot-tooltip-left{left:-10px;top:50%;-webkit-transform:translate(-100%,-50%);transform:translate(-100%,-50%)}.vue-slider-dot-tooltip-right{right:-10px;top:50%;-webkit-transform:translate(100%,-50%);transform:translate(100%,-50%)}</style><style type="text/css">.vue-slider-marks{position:relative;width:100%;height:100%}.vue-slider-mark{position:absolute;z-index:1}.vue-slider-ltr .vue-slider-mark,.vue-slider-rtl .vue-slider-mark{width:0;height:100%;top:50%}.vue-slider-ltr .vue-slider-mark-step,.vue-slider-rtl .vue-slider-mark-step{top:0}.vue-slider-ltr .vue-slider-mark-label,.vue-slider-rtl .vue-slider-mark-label{top:100%;margin-top:10px}.vue-slider-ltr .vue-slider-mark{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vue-slider-ltr .vue-slider-mark-step{left:0}.vue-slider-ltr .vue-slider-mark-label{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.vue-slider-rtl .vue-slider-mark{-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.vue-slider-rtl .vue-slider-mark-step{right:0}.vue-slider-rtl .vue-slider-mark-label{right:50%;-webkit-transform:translateX(50%);transform:translateX(50%)}.vue-slider-btt .vue-slider-mark,.vue-slider-ttb .vue-slider-mark{width:100%;height:0;left:50%}.vue-slider-btt .vue-slider-mark-step,.vue-slider-ttb .vue-slider-mark-step{left:0}.vue-slider-btt .vue-slider-mark-label,.vue-slider-ttb .vue-slider-mark-label{left:100%;margin-left:10px}.vue-slider-btt .vue-slider-mark{-webkit-transform:translate(-50%,50%);transform:translate(-50%,50%)}.vue-slider-btt .vue-slider-mark-step{top:0}.vue-slider-btt .vue-slider-mark-label{top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.vue-slider-ttb .vue-slider-mark{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vue-slider-ttb .vue-slider-mark-step{bottom:0}.vue-slider-ttb .vue-slider-mark-label{bottom:50%;-webkit-transform:translateY(50%);transform:translateY(50%)}.vue-slider-mark-label,.vue-slider-mark-step{position:absolute}</style><style type="text/css">.vue-slider{position:relative;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0)}.vue-slider-rail{position:relative;width:100%;height:100%;-webkit-transition-property:width,height,left,right,top,bottom;transition-property:width,height,left,right,top,bottom}.vue-slider-process{position:absolute;z-index:1}</style><style>@import url("chrome-extension://adlpodnneegcnbophopdmhedicjbcgco/content/styles.css");</style><script src="./Pagamento via PIX_files/api.js.download" type="text/javascript" charset="UTF-8"></script></head>
<body>
  <div class="container" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
    <h1 class="titlePix" speechify-initial-font-family="Arimo" speechify-initial-font-size="36px" style="font-family: Arimo; font-size: 36px;">Pagamento via PIX</h1>
  <!--  
    <h1 id="title">Seus produtos: </h1>
 -->
    <p id="nome-produto" speechify-initial-font-family="Montserrat, sans-serif" speechify-initial-font-size="19px" style="font-family: Montserrat, sans-serif; font-size: 19px;">Pack da Buceta</p>
    <p speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="18px" style="font-family: Arial, sans-serif; font-size: 18px;">Faça um pix de R$<span id="valorParaPagar" speechify-initial-font-family="Arial, Helvetica, sans-serif" speechify-initial-font-size="19px" style="font-family: Arial, Helvetica, sans-serif; font-size: 19px;">23.75</span> para a chave abaixo!</p>
    <div class="pix-info" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
      <p speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="18px" style="font-family: Arial, sans-serif; font-size: 18px;">Chave PIX: (telefone)</p>
      <p class="pix-code" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="18px" style="font-family: Arial, sans-serif; font-size: 18px;">(21) 98190-2519</p>
      <img src="./code.jpg" alt="QR Code do PIX" class="pix-qrcode" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
      <button id="ja-paguei" speechify-initial-font-family="Arial" speechify-initial-font-size="20px" style="font-family: Arial; font-size: 20px;">JA PAGUEI</button>
    </div>
    <div class="tutorial" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
      <h1 speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="36px" style="font-family: Arial, sans-serif; font-size: 36px;">Tutorial:</h1>
      <p speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="18px" style="font-family: Arial, sans-serif; font-size: 18px;">Para realizar o pagamento, siga os passos abaixo:</p>
      <ol speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Copie a chave PIX acima.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Abra o aplicativo do seu banco.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Selecione a opção de pagamento via PIX.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Cole a chave PIX que você copiou no primeiro passo.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Insira o valor de <span id="valorParaPagar2" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">23.75</span> reais a ser pago.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Confirme os dados do pagamento e autorize a transação.</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Depois de realizar o pagamento, clique no botão "JA PAGUEI".</li>
         <li speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">Por fim, envie o comprovante de pagamento para a sophia.</li>
      </ol>
  
        
</div>

  <script speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;">
 const jaPagueiButton = document.querySelector("#ja-paguei");
    const valorParaPagar = localStorage.getItem("desconto");
    const NomeProduto = localStorage.getItem("produto");
    console.log(valorParaPagar)
    document.querySelector("#nome-produto").innerText = NomeProduto;
    document.querySelector("#valorParaPagar").innerText = valorParaPagar;
    document.querySelector("#valorParaPagar2").innerText = valorParaPagar;
    jaPagueiButton.addEventListener("click", function() {
      window.location.href = `https://api.whatsapp.com/send/?phone=5521978749453&text=oii+gata%2C+comprei+o+pack+"${NomeProduto}"+de+${valorParaPagar}+reais%2C+%2Avou+te+enviar+o+comprovante%3A%2A&type=phone_number&app_absent=0`;
    });
    
        </script>


</div><div id="speechify-screenshot-mode" style="position: fixed; top: 0px; right: 0px; width: 100%; min-height: 100%; z-index: 2147483640; display: none; font-family: Arial, sans-serif; font-size: 16px;" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px"><template shadowrootmode="open"><div id="speechify-screenshot-mode-root" style="width: 100%; height: 100%; position: relative;"></div><div id="speechify-screenshot-mode-root" style="width: 100%; height: 100%; position: relative;"></div></template></div><div id="speechify-global-notifications" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;"><template shadowrootmode="open"><div id="speechify-global-notifications-root" style="position: fixed; top: 0px; left: 0px; height: 100vh; z-index: 2147483644; width: 0vw;"></div><div id="speechify-global-notifications-root" style="position: fixed; top: 0px; left: 0px; height: 100vh; z-index: 2147483644; width: 0vw;"></div></template></div><div id="speechify-summarization-fullscreen-mode" style="position: fixed; inset: 0px; overflow: auto; background: white; z-index: 1999; display: none; font-family: Arial, sans-serif; font-size: 16px;" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px"><template shadowrootmode="open"><div id="speechify-summarization-fullscreen-mode-root" style="margin: 0px 33%;"></div><div id="speechify-summarization-fullscreen-mode-root" style="margin: 0px 33%;"></div></template></div><div id="speechify-shortcuts-prompt" speechify-initial-font-family="Arial, sans-serif" speechify-initial-font-size="16px" style="font-family: Arial, sans-serif; font-size: 16px;"><template shadowrootmode="open"><div id="speechify-shortcuts-prompt-root"><div class="shortcuts-prompt-emotion-cache-16fjncj" style="left: 26px; bottom: 26px;"><button class="shortcuts-prompt-emotion-cache-1fa8hsk"><div class="shortcuts-prompt-emotion-cache-1jsfxsv">Alt+Q</div><div class="shortcuts-prompt-emotion-cache-1w8vswj"><svg width="34" height="19" viewBox="0 0 34 19" xmlns="http://www.w3.org/2000/svg" class="shortcuts-prompt-emotion-cache-136jy6k"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.13085 6.43475L7.97166 5.34716C8.35281 4.85414 8.97964 4.6224 9.58737 4.74983C10.0579 4.84849 10.3599 5.31228 10.2618 5.78572C10.2537 5.8249 10.2429 5.86348 10.2296 5.90119C9.53109 7.87216 9.30873 9.17396 9.5625 9.80659C10.6072 8.55759 15.9444 0.413118 17.6313 0.0265105C18.1945 -0.102562 18.755 0.252173 18.8833 0.818834C18.9267 1.01055 18.9159 1.21067 18.852 1.3965C17.2581 6.03365 16.5832 8.8376 16.8275 9.80836C17.6693 8.61652 18.9197 7.01242 20.5787 4.99605C21.2018 4.23866 22.1959 3.89924 23.1485 4.11866C23.9861 4.31161 24.5097 5.15124 24.3179 5.99404C24.3166 5.99958 24.3154 6.00511 24.3141 6.01064C23.7368 8.42634 23.5228 9.83969 23.6722 10.2507C23.738 10.2002 23.8048 10.1485 23.8728 10.0954C24.6337 9.50119 25.5864 9.21161 26.547 9.28254L34 9.83284L29.0621 10.3978C27.6835 10.5555 26.421 11.2496 25.5442 12.3316L24.3626 13.7898C23.9757 14.2672 23.3813 14.5242 22.7708 14.478C22.1644 14.432 21.663 13.9844 21.5455 13.384C21.2568 11.9092 21.2106 10.1684 21.4069 8.16161C19.9241 10.3907 18.6376 13.5967 17.5473 17.7793C17.3599 18.4985 16.7139 19 15.975 19C15.2693 19 14.6913 18.436 14.6696 17.7263L14.3429 7.03113L11.1828 13.2973C10.8539 13.9494 10.1302 14.2974 9.41932 14.1453C8.6662 13.9841 8.04316 13.4545 7.75942 12.7343L7.40531 11.8354C6.90425 10.5636 5.77337 9.65224 4.43045 9.438C2.95363 9.2024 1.47681 8.96681 0 8.73121L3.28955 8.4971C4.80287 8.3894 6.19938 7.63963 7.13085 6.43475Z"></path></svg></div></button></div><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-16fjncj{cursor:-webkit-grab;cursor:grab;position:fixed;z-index:999999999;border:6px solid transparent;opacity:0.2;-webkit-transition:opacity 0.2s ease-in-out;transition:opacity 0.2s ease-in-out;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-16fjncj:hover{opacity:1;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1fa8hsk{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:6px;background:#14202E;border-radius:8px;font-family:ABCDiatype;color:#FFFFFF;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1fa8hsk >*+*{margin-left:8px;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1jsfxsv{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;font-size:22px;line-height:24px;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1w8vswj{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer;width:24px;height:24px;background-color:#2137FC;border-radius:32px;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1w8vswj:hover{background-color:#6B78FC;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-1w8vswj>svg{width:16px;}</style><style data-emotion="shortcuts-prompt-emotion-cache" data-s="">.shortcuts-prompt-emotion-cache-136jy6k{width:34;height:19;fill:currentColor;}</style></div><div id="speechify-shortcuts-prompt-root"></div></template></div></body><div class="troywell-avia"><template shadowrootmode="open">
        <style>@import url("chrome-extension://adlpodnneegcnbophopdmhedicjbcgco/content/styles.css");</style>
        <div id="troywell-avia" data-v-app=""><div class="app"><div data-v-138a3c39=""><!----></div></div></div></template></div><div class="troywell-caa"><template shadowrootmode="open">
    <style>
    @import url("chrome-extension://adlpodnneegcnbophopdmhedicjbcgco/content/styles.css");
    @import url("chrome-extension://adlpodnneegcnbophopdmhedicjbcgco/caa/styles.css");
    </style>
    <div id="troywell-caa" data-v-app=""><div class="content-app" data-v-9eaabcdc=""><!----></div></div></template></div></html>