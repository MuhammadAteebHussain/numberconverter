<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\NumberConverterContract;
use App\Http\Requests\ConvertNumberRequest;

class NumberConverterController extends Controller
{
    public $numberConverter;

    public function __construct(NumberConverterContract $numberConverter)
    {
        $this->numberConverter = $numberConverter;
    }

    public function index()
    {
        return view('converter');
    }

    public function convert(ConvertNumberRequest $request)
    {
        $input = $request->input('input');
        $result = $this->numberConverter->convertToInteger($input);

        return redirect()->route('result', compact('result', 'input'));
    }

    public function result(Request $request)
    {
        $result = $request->query('result');
        $input = $request->query('input');
        return view('result', compact('result', 'input'));
    }
}
