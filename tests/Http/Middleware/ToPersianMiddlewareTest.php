<?php
it('will change non english digits to english',function (){
   $request = new \Illuminate\Http\Request();
   $request->merge(['digits'=>'٠0١1٢2٣3٤4٥5٦6٧7٨8٩9,;كإأؤةۀي?']);
   new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersian()->handle($request,function($request){
      expect($request->digits)->toBe('۰۰۱۱۲۲۳۳۴۴۵۵۶۶۷۷۸۸۹۹،؛کااوههی؟');
   });
});
it('will not change the excepted attributes', function () {
    $request = new \Illuminate\Http\Request();
    $request->merge([
        'digits'=>'?',
        'password'=>'?'
    ]);
    new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersian()->handle($request,function($request){
        expect($request)
            ->digits->toBe('؟')
            ->password->toBe('?');
    });
});
it('will not change non string values', function () {
    $request = new \Illuminate\Http\Request();
    $request->merge([
        'int'=>0,
        'digits'=>'1'
    ]);
    new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersian()->handle($request,function($request){
        expect($request)
            ->digits->toBe('۱')
            ->int->toBe(0);
    });
});