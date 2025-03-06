<template>
    <div>
      
      <AiAdvisoryNotification v-if="!isAdminDashboard" />
      <div class="container-fluid">
    <div class="row border-black border-bottom border-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.careerviet.vn/background/saint-gobain_1900x570_2024_12_10_1733823216.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.careerviet.vn/background/career-start-viec-tot-luong-cao-1900x570_2020_06_02_1591068457.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.careerviet.vn/background/cv_eoc_2024_result_winners_plb_1900x570_2024_12_16_1734325176.png"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <div class="row mt-5">
        <h1 class="text-center mb-3"><b>Người Tư Vấn</b></h1>
        <div class="col-lg-3" style="max-width: 400px; margin-right: 31.3px;">
            <div class="card border-black border-2">
                <div class=" card-body text-center align-middle">
                    <img src="../../../assets/images/login-images/haha.jpg" alt="" style="width: 320px; height: 454px;">
                </div>
            </div>
            <h4 class="text-center mt-2"><b>Trần Hữu Hiếu</b></h4>
        </div>
        <div class="col-lg-3" style="max-width: 400px; margin-right: 31.3px;">
            <div class="card border-black border-2">
                <div class=" card-body text-center align-middle">
                    <img src="../../../assets/images/login-images/haha1.jpg" alt="" style="width: 320px; height: 454px;">
                </div>
            </div>
            <h4 class="text-center mt-2"><b>Trần Quang Tuấn Anh</b></h4>
        </div>
        <div class="col-lg-3" style="max-width: 400px; margin-right: 31.3px;">
            <div class="card border-black border-2">
                <div class=" card-body text-center align-middle">
                    <img src="../../../assets/images/aDuc.jpg" alt="" style="width: 320px; height: 454px;">
                </div>
            </div>
            <h4 class="text-center mt-2"><b>Võ Văn Đức</b></h4>
        </div>
        <div class="col-lg-3" style="max-width: 400px;">
            <div class="card border-black border-2">
                <div class=" card-body text-center align-middle">
                    <img src="../../../assets/images/Ken.jpg" alt="" style="width: 320px; height: 454px;">
                </div>
            </div>
            <h4 class="text-center mt-2"><b>Trần Thị Phương Thảo</b></h4>
        </div>
    </div>
</div>
    </div>
  </template>
  
  <script>
  import { onMounted, ref, defineComponent } from 'vue';

  
  export default defineComponent({
    name: 'CozeChat',
    components: {
      AiAdvisoryNotification: {
        template: `
          <div class="fixed bottom-24 right-4 z-50 max-w-xs bg-white shadow-lg rounded-lg p-4 border flex items-start">
            <MessageCircleQuestion class="text-blue-600 mr-3 flex-shrink-0" size="24" />
            <div>
              <p class="text-sm font-medium text-gray-900 mb-2">Tư vấn bằng Ai</p>
            </div>
          </div>
        `,
      },
    },
    setup() {
      const isCozeLoaded = ref(false);
      const isAdminDashboard = ref(window.location.pathname === "/");
  
      onMounted(() => {
        const script = document.createElement('script');
        script.src = 'https://sf-cdn.coze.com/obj/unpkg-va/flow-platform/chat-app-sdk/1.0.0-beta.4/libs/oversea/index.js';
        script.async = true;
  
        script.onload = () => {
          if (window.CozeWebSDK) {
            new window.CozeWebSDK.WebChatClient({
              config: {
                bot_id: '7445946489404653576',
              },
              componentProps: {
                title: 'Trợ Lý AI',
              },
            });
            isCozeLoaded.value = true;
          }
        };
  
        script.onerror = () => {
          console.error('Failed to load Coze SDK');
        };
  
        document.body.appendChild(script);
  
        return () => {
          document.body.removeChild(script);
        };
      });
  
      return {
        isCozeLoaded,
        isAdminDashboard,
      };
    },
  });
  </script>
  
  <style scoped>
  /* Thêm các kiểu CSS nếu cần */
  </style>
