<style>
    /* スライダーのスタイル（レスポンシブ） */
    @media screen and (max-width: 768px) {
      .slider {
        height: 300px !important;
        padding: 0 16px !important;  /* ← モバイル時の左右余白 */
        box-sizing: border-box;
      }
      .slider img {
        position: absolute;
        top: 0;
        left: 0;
        width: calc(100% - 32px) !important;  /* 16px × 2 */
        height: 300px !important;
        object-fit: cover !important;
      }
      .spica-logo-main {
        top: 60% !important;
        height: 80px !important;
        background: rgba(255, 255, 255, 0.6) !important;
        -webkit-backdrop-filter: blur(2px) !important;
        box-shadow: none !important;
      }
      .spica-logo-main img {
        width: 130px !important;
        height: auto !important;
      }
    }    
</style>