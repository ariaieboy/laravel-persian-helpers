<?php
it('will change non english digits to english',function (){
   $request = new \Illuminate\Http\Request();
   $request->merge(['digits'=>'٠۰١۱٢۲٣۳٤۴٥۵٦۶٧۷٨۸٩۹']);
   new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToEnglishDigit()->handle($request,function($request){
      expect($request->digits)->toBe('00112233445566778899');
   });
});
it('will not change the excepted attributes', function () {
    $request = new \Illuminate\Http\Request();
    $request->merge([
        'digits'=>'۰',
        'password'=>'۱'
    ]);
    new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToEnglishDigit()->handle($request,function($request){
        expect($request)
            ->digits->toBe('0')
            ->password->toBe('۱');
    });
});