<style>
    .bouncingball {
      width:140px;
      height:140px;
      border-radius:100%;
      background:#CCC;
      animation: bounce 2s;
      transform: translateY(0px);
      animation-iteration-count: 1;
      position:absolute;
      margin:50px;
      z-index: 1000;
    }

    @keyframes bounce {
      0% {
        top: -140px;
        -webkit-animation-timing-function: ease-in;
      }
      25% {
        top: 140px;
        height: 140px;
        -webkit-animation-timing-function: ease-out;
      }
      50% {
        top: 0;
        -webkit-animation-timing-function: ease-in;
      }
      75% {
        top: 100px; 
        height: 140px; 
        -webkit-animation-timing-function: ease-out;
      }
      100% {
        top: 0;
        -webkit-animation-timing-function: ease-in;
      }
    }
  </style>
  <div class="bouncingball"></div>