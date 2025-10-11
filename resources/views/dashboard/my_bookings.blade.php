@extends('../layouts/master')
@section('content')
 <section id="content" class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#F8F8F8] overflow-x-hidden pb-[122px] relative">
    <div class="w-full h-[203px] absolute top-0 bg-[linear-gradient(244.6deg,_#7545FB_14.17%,_#2A3FCC_92.43%)]">
    </div>
    <div class="relative z-10 px-[18px] flex flex-col gap-6 mt-[60px] flex-1">
      <div class="flex items-center justify-between top-menu">
        <div class="dummy-spacer w-[42px] h-[42px] flex shrink-0">
        </div>
        <p class="font-semibold text-lg leading-[28px] text-white text-center">Rencent Activity</span></p>
        <div class="dummy-spacer w-[42px] h-[42px] flex shrink-0">
        </div>
      </div>
      <div id="Activity-list" class="result-card-container flex flex-col gap-[18px]">
        <div class="flex flex-col gap-4 overflow-hidden bg-white activity-result rounded-xl">
          <div class="flex items-center justify-between p-4 pb-0">
            <div class="flex flex-col gap-[2px]">
              <p class="font-semibold">Waiting for Confirmation</p>
              <p class="font-medium text-xs leading-[18px] text-[#757C98]">Order ID : 222509851</p>
            </div>
            <button class="flex shrink-0">
              <img src="assets/images/icons/more.svg" alt="icon">
            </button>
          </div>
          <hr class="border-[#DCDFE6]">
          <div class="flex items-center gap-3 px-4 hotel-details">
            <div class="thumbnail-container w-[100px] h-[120px] flex shrink-0 rounded-xl overflow-hidden">
              <img src="assets/images/thumbnails/thumbnail-room-2.png" class="object-cover w-full h-full" alt="thumbnail">
            </div>
            <div class="hotel-info flex flex-col gap-[6px] h-fit">
              <div class="ratings-container flex items-center gap-[2px]">
                <div class="flex items-center star-container">
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star-half.svg" alt="star">
                  </div>
                </div>
                <p class="rating font-semibold text-sm leading-[21px]">4.5/5.0</p>
              </div>
              <p class="font-semibold">Bimore Hyatt Regency</p>
              <div class="flex items-center gap-3 badge">
                <div class="flex items-center gap-1">
                  <div class="flex w-4 h-4 shrink-0">
                    <img src="assets/images/icons/location-grey.svg" alt="icon">
                  </div>
                  <p class="font-medium text-sm leading-[21px] text-[#757C98]">Kuala Lumpur</p>
                </div>
                <div class="flex items-center gap-1">
                  <div class="flex w-4 h-4 shrink-0">
                    <img src="assets/images/icons/star-outline-grey.svg" alt="icon">
                  </div>
                  <p class="font-medium text-sm leading-[21px] text-[#757C98]">4 Star</p>
                </div>
              </div>
              <div class="total-price flex gap-[2px] items-center">
                <p class="text-[#54A917] font-semibold text-lg leading-[27px]">Rp406.400</p>
                <p class="text-[#757C98] font-semibold text-xs leading-[18px]">/night</p>
              </div>
            </div>
          </div>
          <a href="order-details-pending.html" class="flex items-center justify-center font-semibold p-[12px_24px] rounded-lg h-12 bg-[#4041DA17] text-[#4041DA] m-4 mt-0">Booking Details</a>
        </div>
        <div class="flex flex-col gap-4 overflow-hidden bg-white activity-result rounded-xl">
          <div class="flex items-center justify-between p-4 pb-0">
            <div class="flex flex-col gap-[2px]">
              <p class="font-semibold">Booking Success</p>
              <p class="font-medium text-xs leading-[18px] text-[#757C98]">Order ID : 222509851</p>
            </div>
            <button class="flex shrink-0">
              <img src="assets/images/icons/more.svg" alt="icon">
            </button>
          </div>
          <hr class="border-[#DCDFE6]">
          <div class="flex items-center gap-3 px-4 hotel-details">
            <div class="thumbnail-container w-[100px] h-[120px] flex shrink-0 rounded-xl overflow-hidden">
              <img src="assets/images/thumbnails/thumbnail-room-2.png" class="object-cover w-full h-full" alt="thumbnail">
            </div>
            <div class="hotel-info flex flex-col gap-[6px] h-fit">
              <div class="ratings-container flex items-center gap-[2px]">
                <div class="flex items-center star-container">
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star.svg" alt="star">
                  </div>
                  <div class="flex shrink-0 w-[18px] h-[18px] p-[2px]">
                    <img src="assets/images/icons/Star-half.svg" alt="star">
                  </div>
                </div>
                <p class="rating font-semibold text-sm leading-[21px]">4.5/5.0</p>
              </div>
              <p class="font-semibold">Bimore Hyatt Regency</p>
              <div class="flex items-center gap-3 badge">
                <div class="flex items-center gap-1">
                  <div class="flex w-4 h-4 shrink-0">
                    <img src="assets/images/icons/location-grey.svg" alt="icon">
                  </div>
                  <p class="font-medium text-sm leading-[21px] text-[#757C98]">Kuala Lumpur</p>
                </div>
                <div class="flex items-center gap-1">
                  <div class="flex w-4 h-4 shrink-0">
                    <img src="assets/images/icons/star-outline-grey.svg" alt="icon">
                  </div>
                  <p class="font-medium text-sm leading-[21px] text-[#757C98]">4 Star</p>
                </div>
              </div>
              <div class="total-price flex gap-[2px] items-center">
                <p class="text-[#54A917] font-semibold text-lg leading-[27px]">Rp406.400</p>
                <p class="text-[#757C98] font-semibold text-xs leading-[18px]">/night</p>
              </div>
            </div>
          </div>
          <a href="order-details-success.html" class="flex items-center justify-center font-semibold p-[12px_24px] rounded-lg h-12 bg-[#4041DA17] text-[#4041DA] m-4 mt-0">Booking Details</a>
        </div>
      </div>
    </div>
    <div id="Menu-bar" class="fixed bottom-[24px] px-[18px] max-w-[640px] w-full z-30">
      <div class="bg-white p-[14px_12px] rounded-full flex items-center justify-center gap-8 shadow-[0_8px_30px_0_#0A093212]">
        <a href="index.html">
          <div class="flex flex-col items-center gap-1">
            <div class="flex w-6 h-6 shrink-0">
              <img src="assets/images/icons/home-nonactive.svg" alt="icon">
            </div>
            <p class="text-xs leading-[18px] font-semibold text-[#757C98]">Home</p>
          </div>
        </a>
        <a href="search.html">
          <div class="flex flex-col items-center gap-1">
            <div class="flex w-6 h-6 shrink-0">
              <img src="assets/images/icons/search-nonactive.svg" alt="icon">
            </div>
            <p class="text-xs leading-[18px] font-medium text-[#757C98]">Search</p>
          </div>
        </a>
        <a href="">
          <div class="flex flex-col items-center gap-1">
            <div class="flex w-6 h-6 shrink-0">
              <img src="assets/images/icons/activity-active.svg" alt="icon">
            </div>
            <p class="text-xs leading-[18px] font-medium text-[#4041DA]">Activity</p>
          </div>
        </a>
        <a href="">
          <div class="flex flex-col items-center gap-1">
            <div class="flex w-6 h-6 shrink-0">
              <img src="assets/images/icons/settings-nonactive.svg" alt="icon">
            </div>
            <p class="text-xs leading-[18px] font-medium text-[#757C98]">Settings</p>
          </div>
        </a>
      </div>
    </div>
  </section>
@endsection