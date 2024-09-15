{{-- <div  class="la-ball-scale-multiple">
    <div></div>
    <div></div>
    <div></div>
</div> --}}

<div class="loader"></div>
<style>

    .loader {
      width: 17px;
      aspect-ratio: 1;
      border-radius: 50%;
      background: #f5e6e6;
      display: grid;
      animation: l22-0 2s infinite linear;
    }
    .loader:before,
    .loader:after {
      content: "";
      grid-area: 1/1;
      margin: 15%;
      border-radius: 50%;
      background: inherit;
      transform: rotate(0deg) translate(150%);
      animation: l22 1s infinite;
    }
    .loader:after {
      animation-delay: -.5s
    }
    @keyframes l22-0 {
      100% {transform: rotate(1turn)}
    }
    @keyframes l22 {
      100% {transform: rotate(1turn) translate(150%)}
    }
</style>
