@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')
@section('content')
<section class="relative z-10 py-10">
 <div class="bg-third absolute left-0 top-0 z-[-1] h-full w-1/4"></div>
 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/loginBg.jpg')}}" alt="image" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Register a new account
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
       We make it easy for everyone to <br class="hidden sm:block" />
       access their account
      </p>
      <form id="register-form" action="{{route('register')}}" method="post">
       @csrf
       {{-- Input Fields --}}
       <div class="mb-4">
        <input value="{{old('name')}}" type="text" name="name" placeholder="Username" class="@error('name') !ring-red-500 @enderror focus:border-primary h-12 w-full border rounded-lg border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('name')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-4">
        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter your email" class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-4">
        <input type="password" name="password" placeholder="Enter your Password" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-8">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
       </div>

       {{-- Terms and Conditions --}}
       <div class="mb-8 flex flex-wrap justify-between">
        <div class="inline-flex items-center">
            <input type="checkbox" id="check-with-link" class="peer h-5 w-5 cursor-pointer rounded border border-slate-300 checked:bg-slate-800 checked:border-slate-800" />
            <label class="cursor-pointer ml-2 text-[#adadad] text-sm" for="check-with-link">
              <p>
                I agree with the
                <a href="#" id="terms-link" class="font-medium hover:text-slate-800 underline">terms and conditions</a>.
              </p>
            </label>
          </div>
       </div>
       <div class="flex flex-wrap">
        <div class="w-full">
         <button id="submit-button" class="bg-secondary mb-3 py-4 rounded-lg w-full cursor-pointer px-5 text-white transition hover:bg-opacity-90">
          Create Account
         </button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>

<!-- Modal -->
<div id="terms-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
 <div class="relative mx-auto my-20 max-w-3xl rounded-lg bg-white p-8">

  <p class="mb-6">

   <div class="terms-container">
    <h1 class="text-2xl font-bold">Movie Video Kullanım Şartları</h1>

    <p class="text-sm text-gray-600">Son Güncelleme: 19 Ekim 2023</p>
    <p>
      Movie Video kullanım şartlarına hoş geldiniz. Bu şartlar, sizin ile size Movie Video hizmetini sunan ve konumunuza göre, Movie.com Services LLC, Movie Digital UK Limited veya bunların iştiraklerinden herhangi biri olabilecek olan tüzel kişi (“Movie”, “biz” veya “bizim”) aranızda geçerlidir. Bulunduğunuz konuma bağlı olarak size Movie Video hizmetini sunan Movie iştirakini ve uygulanan diğer şartlara ulaşmak için www.primevideo.com/ww-av-legal-home adresini ziyaret ediniz. Movie Video hizmet sağlayıcınız, muhtelif zamanlarda, (yürürlükte bulunan mevzuat aksini gerektirmedikçe) bildirim ile veya bildirimsiz olarak değişebilecektir. Lütfen bu şartları sizin için geçerli olan Gizlilik Bildirimi, Kullanım Koşulları, ve Movie Video Kullanım Kuralları ile Movie Video hizmetine ilişkin diğer tüm kural ve politikalar (herhangi bir ürün ayrıntı sayfasında veya Movie Video hizmeti için herhangi bir yardım veya diğer bilgi sayfasında belirtilen kurallar veya kullanım hükümleri dahil, fakat bunlarla sınırlı olmamak üzere) (hep birlikte, bu "Sözleşme") ile birlikte okuyun. Birleşik Krallık, Avrupa Birliği veya Brezilya'da bulunuyorsanız, Gizlilik Bildirimi Çerez Bildirimi ve İlgi Alanına Dayalı Reklam Bildirimi, Sözleşmenize dahil değildir. Bu politika ve bildirimlerin sizin için geçerli olan versiyonları, kişisel bilgilerinizi nasıl işlediğimizin anlaşılması için incelemenize açıktır. Movie Video hizmetini her ziyaret ettiğinizde, göz attığınızda veya kullandığınızda, bu Sözleşmeyi kendiniz, evinizin tüm üyeleri ve hesabınız kapsamında Hizmeti kullanan diğer kişiler adına kabul etmiş olursunuz.
    </p>
    <h2 class="text-lg font-semibold">1. Hizmet</h2>
    <p>
        Movie Video ("Hizmet"); size dijital filmler, televizyon programları ve diğer video içerikleri (birlikte, “Dijital İçerik”) ve bu Sözleşmede belirtilen diğer hizmetleri sunan, tavsiye eden ve keşfetmenize yardımcı olan kişiselleştirilmiş bir hizmettir. Movie da dahil olmak üzere, Hizmet ve Dijital İçerik'e erişmenin farklı yolları bulunmaktadır ve diğer Prime olanakları ve Movie hizmetlerini kullanımınız uygulamalar, internet siteleri veya bu hizmetlere erişim sağladığınız cihazlarda mevcut olan ayrı şartlara tabidir. 18 yaşının altında veya bulunduğunuz ülkedeki reşit olma yaşının altında olmanız durumunda, Hizmeti, yalnızca bir ebeveyn veya vasinin gözetimi ile kullanabilirsiniz. İlginizi çekebilecek olan Dijital İçerik, özellikler ve hizmetler ile ilgili tavsiyeleri göstermek de dahil olmak üzere, Hizmetlerin bir parçası olarak içerik ve özellikleri kişiselleştirmekteyiz. Ayrıca sürekli olarak Movie cihazları ve hizmetleri ile sizin bunlar ile deneyiminizi geliştirmeye çalışmaktayız.
    <h2 class="text-lg font-semibold">2. Uyumlu Cihazlar</h2>
    <p>
        Dijital İçerik'i anlık olarak görüntülemek (streaming) veya Dijital İçerik'i indirmek için, muhtelif zamanlarda oluşturduğumuz sistem ve uyumluluk gerekliliklerini karşılayan bir kişisel bilgisayar, taşınabilir ortam yürütücüsü veya diğer bir cihazı (“Uyumlu Cihaz”) kullanmanız gerekmektedir. Hangi cihazların desteklendiğine ilişkin daha fazla bilgiyi şu bölümlerde bulabilirsiniz: ABD, Birleşik Krallık, Almanya, Japonya, Tüm Diğer Ülkeler. Bazı Uyumlu Cihazlar, yalnızca Dijital İçerik'i anlık görüntülemek için kullanılabilir, bazıları ise yalnızca Dijital İçerik'i indirmek için kullanılabilir ve bazıları da hem Dijital İçerik'i anlık görüntülemek hem de Dijital İçerik'i indirmek için kullanılabilir. Uyumlu Cihazlar ile ilgili gerekliliklere ilişkin olarak zaman zaman değişiklik yapabiliriz ve bazı durumlarda, bir cihazın Uyumlu Cihaz olup olmadığı (veya Uyumlu Cihaz olmaya devam edip etmediği) cihaz üreticisi tarafından veya diğer üçüncü kişilerce sunulan veya sürdürülen yazılım veya sistemlere bağlı olabilecektir. Dolayısıyla, mevcut durumda Uyumlu Cihaz olan cihazlar, ileride Uyumlu Cihaz sayılmayabilecektir. Size Movie Video mobil uygulamasını sunan Movie şirketi, size Hizmet'i sunan Movie şirketinden farklı olabilir..
    </p>
    <h2 class="text-lg font-semibold">3. Coğrafi Değişkenlik</h2>
    <p>
        İçerik sağlayıcılar tarafından uygulanan teknik ve diğer kısıtlamalar sebebiyle, Hizmet, yalnızca belirli ülkelerde sunulabilir. (Dijital İçerik'in altyazılı ve dublajlı ses versiyonları dahil) Dijital İçerik ve Dijital İçerik'i nasıl sunduğumuz zaman içinde ve bulunduğunuz konuma göre değişiklik gösterecektir. Movie, coğrafi konumunuzu doğrulamak için birtakım teknolojiler kullanacaktır. Konumunuzu saklamak veya gizlemek için herhangi bir teknoloji veya teknik kullanamazsınız.
    </p>
    <h2 class="text-lg font-semibold">4. Dijital İçerik</h2> <p>
        Hizmet, (i) abonelik süresi boyunca (örneğin, Movie veya diğer abonelikler veya tek başına video abonelik olanakları ile) sınırlı bir süre ile görüntülemek için abonelik bazında Dijital İçerik'e erişmenize (“Abonelik Dijital İçerik”); (ii) sınırlı bir süre boyunca isteğe bağlı görüntüleme için Dijital İçerik'i kiralamanıza (“Kiralık Dijital İçerik”); (iii) sınırsız bir süre boyunca isteğe bağlı görüntüleme için Dijital İçerik'i satın almanıza (“Satın Alınan Dijital İçerik”); (iv) sınırlı bir süre boyunca izlediğin kadar öde esasıyla görüntülemek için Dijital İçerik'i satın almanıza (“PPV Dijital İçerik”); ve/veya (v) sınırlı bir süre boyunca bedava, reklam destekli veya tanıtıcı amaçlı olarak Dijital İçerik'e erişmenize (“Bedava Dijital İçerik”) imkan tanıyabilir. Dijital İçerik; Abonelik Dijital İçerik, Kiralık Dijital İçerik, Satın Alınan Dijital İçerik, PPV Dijital İçerik, Bedava Dijital İçerik olarak veya bunların birleşimi şeklinde sunulabilecek olup her durumda, aşağıda açıklanan sınırlı lisans hakkına tabidir.
    </p>
  </div>
  </p>
  <div class="flex justify-end">
   <button id="close-modal" class="bg-secondary py-2 px-4 text-white rounded-lg hover:bg-opacity-90">
    Onaylıyorum
   </button>
  </div>
 </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const checkbox = document.getElementById('check-with-link');
        const submitButton = document.getElementById('submit-button');
        const form = document.getElementById('register-form');

        // Form gönderimi sırasında kontrol
        form.addEventListener('submit', (e) => {
            if (!checkbox.checked) {
                e.preventDefault(); // Checkbox işaretlenmemişse gönderimi durdur
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Lütfen hizmet şartlarını kabul edin.',
                });
            }
        });
    });
</script>
@endsection
