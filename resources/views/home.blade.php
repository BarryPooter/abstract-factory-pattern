@extends('layouts.app')

@section('content')
    <h1>Your Medabots</h1>

    @foreach ($medabots as $medabot)
        <div class="info-block">
            <span style="font-weight: 600;">I have a ranged Medabot that exists of the following parts:</span>
            <ul>
                <li><strong>Head:</strong> {{ $medabot->getHead()->getName() }} which can deal {{ $medabot->getHead()->getDamageOutput() }} damage.</li>
                <li><strong>Left Arm:</strong> {{ $medabot->getArm('left')->getName() }} which can deal {{ $medabot->getArm('left')->getDamageOutput() }} damage.</li>
                <li><strong>Right Arm:</strong> {{ $medabot->getArm('right')->getName() }} which can deal {{ $medabot->getArm('right')->getDamageOutput() }} damage.</li>
                <li><strong>Left Leg:</strong> {{ $medabot->getLeg('left')->getName() }} which can deal {{ $medabot->getLeg('left')->getDamageOutput() }} damage.</li>
                <li><strong>Right Leg:</strong> {{ $medabot->getLeg('right')->getName() }} which can deal {{ $medabot->getLeg('right')->getDamageOutput() }} damage.</li>
            </ul>
        </div>
    @endforeach
@endsection