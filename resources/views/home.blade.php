@extends('layouts.app')

@section('content')
    <div class="info-block">
        <span style="font-weight: 600;">I have a ranged Medabot that exists of the following parts:</span>
        <ul>
            <li><strong>Head:</strong> {{ $rangedMedabot->getHead()->getName() }} which can deal {{ $rangedMedabot->getHead()->getDamageOutput() }} damage.</li>
            <li><strong>Left Arm:</strong> {{ $rangedMedabot->getArm('left')->getName() }} which can deal {{ $rangedMedabot->getArm('left')->getDamageOutput() }} damage.</li>
            <li><strong>Right Arm:</strong> {{ $rangedMedabot->getArm('right')->getName() }} which can deal {{ $rangedMedabot->getArm('right')->getDamageOutput() }} damage.</li>
            <li><strong>Left Leg:</strong> {{ $rangedMedabot->getLeg('left')->getName() }} which can deal {{ $rangedMedabot->getLeg('left')->getDamageOutput() }} damage.</li>
            <li><strong>Right Leg:</strong> {{ $rangedMedabot->getLeg('right')->getName() }} which can deal {{ $rangedMedabot->getLeg('right')->getDamageOutput() }} damage.</li>
        </ul>
    </div>

    <div class="info-block">
        <span style="font-weight: 600;">I have a melee Medabot that exists of the following parts:</span>
        <ul>
            <li><strong>Head:</strong> {{ $rangedMedabot->getHead()->getName() }} which can deal {{ $rangedMedabot->getHead()->getDamageOutput() }} damage.</li>
            <li><strong>Left Arm:</strong> {{ $rangedMedabot->getArm('left')->getName() }} which can deal {{ $rangedMedabot->getArm('left')->getDamageOutput() }} damage.</li>
            <li><strong>Right Arm:</strong> {{ $rangedMedabot->getArm('right')->getName() }} which can deal {{ $rangedMedabot->getArm('right')->getDamageOutput() }} damage.</li>
            <li><strong>Left Leg:</strong> {{ $rangedMedabot->getLeg('left')->getName() }} which can deal {{ $rangedMedabot->getLeg('left')->getDamageOutput() }} damage.</li>
            <li><strong>Right Leg:</strong> {{ $rangedMedabot->getLeg('right')->getName() }} which can deal {{ $rangedMedabot->getLeg('right')->getDamageOutput() }} damage.</li>
        </ul>
    </div>
@endsection