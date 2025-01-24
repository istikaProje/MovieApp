    <!-- ====== Footer Section Start -->
    <footer class="bg-primary relative z-5 overflow-hidden mt-16 pt-10">
        <div class="container mx-auto">
          <div class=" flex flex-wrap">
            <div class="w-full px-4 sm:w-2/3 lg:w-4/12 xl:w-3/12">
              <div class="mb-10 w-full">
                <a
                  href="javascript:void(0)"
                  class="mb-6 inline-block max-w-[160px]"
                >
                  <img
                  src="{{asset('images/MovieWatchLogo.png')}}"
                    alt="logo"
                    class="max-w-full"
                  />
                </a>
                <p class="mb-7 text-base text-white">
                  We create digital experiences for brands and companies by using
                  technology.
                </p>
                <div class="flex items-center">
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-[#dddddd] hover:opacity-30"
                  >
                  <i class="icon-Facebook text-[18px] leading-none w-[10px] h-[18px] z-[1] text-current"></i> <!-- Facebook SVG -->
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-[#dddddd] hover:opacity-30"
                  >
                  <i class="icon-Twitter text-[18px] leading-none w-[10px] h-[18px] text-current"></i> <!-- Twitter SVG -->
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-[#dddddd] hover:opacity-30"
                  >
                  <i class="icon-Instagram text-[18px] leading-none w-[10px] h-[18px] text-current"></i> <!-- Instagram SVG -->
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-[#dddddd] hover:opacity-30"
                  >
                  <i class="icon-LinkedIn text-[18px] leading-none w-[10px] h-[18px] text-current"></i> <!-- LinkedIn SVG -->
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-3/12 xl:w-2/12">
              <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-white">Company</h4>
                <ul>
                  <li>
                    <a
                      href="{{ route('home') }}"
                      class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30"
                    >
                        Home
                    </a>
                  </li>
                  <li>
                    <a
                      href="{{ route('movies.index') }}"
                      class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30"
                    >
                      Movies
                    </a>
                  </li>
                  <li>
                    <a
                      href="{{ route('about_us') }}"
                      class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30"
                    >
                      About Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>

        <div
          class="mt-12 border-t border-white border-opacity-40  py-8 lg:mt-[60px]"
        >
          <div class="container mx-auto">
            <div class=" flex flex-wrap">
              <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                <div class="my-1">
                  <div
                    class=" flex flex-wrap items-center justify-center md:justify-start"
                  >
                  <div x-data="{ open: false }">
                    <a
                      href="javascript:void(0)"
                      class="px-3 text-base text-white hover:opacity-30"
                      @click="open = true">
                      Privacy policy
                    </a>

                    <div x-show="open" @click.away="open = false" @click="open = false"
                    class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
                    <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                       <div class="bg-gray-900 p-4">
                          <button @click="open = false" class="text-white float-right">&times;</button>
                          <h3 class="text-lg leading-6 font-medium text-white">
                              Movie Video Kullanım Şartları
                          </h3>
                       </div>

                       <div class=" bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

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

                      </div>
                    </div>
                 </div>

              </div>


              <div x-data="{ open: false }">
                <a
                  href="javascript:void(0)"
                  class="px-3 text-base text-white hover:opacity-30"
                  @click="open = true">
                  Legal notice
                </a>

                <div x-show="open" @click.away="open = false" @click="open = false"
                class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
                <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                   <div class="bg-gray-900 p-4">
                      <button @click="open = false" class="text-white float-right">&times;</button>
                      <h3 class="text-lg leading-6 font-medium text-white">
                          Movie Video Kullanım Şartları
                      </h3>
                   </div>

                   <div class=" bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

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

                  </div>
                </div>
             </div>

          </div>
          <div x-data="{ open: false }">
            <a
              href="javascript:void(0)"
              class="px-3 text-base text-white hover:opacity-30"
              @click="open = true">
              Terms of service
            </a>

            <div x-show="open" @click.away="open = false" @click="open = false"
            class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
            <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
               <div class="bg-gray-900 p-4">
                  <button @click="open = false" class="text-white float-right">&times;</button>
                  <h3 class="text-lg leading-6 font-medium text-white">
                      Movie Video Kullanım Şartları
                  </h3>
               </div>

               <div class=" bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

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

              </div>
            </div>
         </div>

      </div>
                  </div>
                </div>
              </div>
              <div class="w-full px-4 md:w-1/3 lg:w-1/2">
                <div class="my-1 flex justify-center md:justify-end">
                  <p class="text-base text-white">&copy; 2025 Movie Watch</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <span class="absolute left-0 top-0 z-[0] pointer-events-none">
            <svg
              width="419"
              height="492"
              viewBox="0 0 419 492"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <ellipse
                cx="55.0003"
                cy="350"
                rx="364"
                ry="364"
                transform="rotate(-45 55.0003 350)"
                fill="url(#paint0_linear)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear"
                  x1="55.0003"
                  y1="-14"
                  x2="55.0003"
                  y2="714"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#ff5757" stop-opacity="0.4" />
                  <stop offset="1" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>

          <span class="absolute bottom-0 right-0 z-[0] pointer-events-none">
            <svg
              width="327"
              height="220"
              viewBox="0 0 327 220"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <ellipse
                cx="199.343"
                cy="199.965"
                rx="199.017"
                ry="199.017"
                transform="rotate(-75 199.343 199.965)"
                fill="url(#paint0_linear)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear"
                  x1="199.343"
                  y1="0.948181"
                  x2="199.343"
                  y2="398.982"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#3056D3" stop-opacity="0.32" />
                  <stop offset="1" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>

          <span class="absolute top-0 right-0 z-[1]">
            <i class="icon-Dot text-[102px] text-gray-500 leading-none"></i>
          </span>
        </div>
      </footer>
      <!-- ====== Footer Section End -->
