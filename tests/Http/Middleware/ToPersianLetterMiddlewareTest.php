<?php
it('will change non english digits to english',function (){
   $request = new \Illuminate\Http\Request();
   $request->merge(['digits'=>',;كإأؤةۀي?']);
   new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianLetter()->handle($request,function($request){
      expect($request->digits)->toBe('،؛کااوههی؟');
   });
});
it('will not change the excepted attributes', function () {
    $request = new \Illuminate\Http\Request();
    $request->merge([
        'digits'=>'?',
        'password'=>'?'
    ]);
    new \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianLetter()->handle($request,function($request){
        expect($request)
            ->digits->toBe('؟')
            ->password->toBe('?');
    });
});