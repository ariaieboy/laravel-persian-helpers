<?php
it('will change non english digits to english',function (){
   $request = new \Illuminate\Http\Request();
   $request->merge(['digits'=>'٠0١1٢2٣3٤4٥5٦6٧7٨8٩9']);
   new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianDigit()->handle($request,function($request){
      expect($request->digits)->toBe('۰۰۱۱۲۲۳۳۴۴۵۵۶۶۷۷۸۸۹۹');
   });
});
it('will not change the excepted attributes', function () {
    $request = new \Illuminate\Http\Request();
    $request->merge([
        'digits'=>'0',
        'password'=>'1'
    ]);
    new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianDigit()->handle($request,function($request){
        expect($request)
            ->digits->toBe('۰')
            ->password->toBe('1');
    });
});