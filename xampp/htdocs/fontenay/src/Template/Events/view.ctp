<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->idEvent]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->idEvent], ['confirm' => __('Are you sure you want to delete # {0}?', $event->idEvent)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->idEvent) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdEvent') ?></th>
            <td><?= h($event->idEvent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($event->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateBeginDay') ?></th>
            <td><?= h($event->FuzzyDateBeginDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateBeginMonth') ?></th>
            <td><?= h($event->FuzzyDateBeginMonth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateBeginYear') ?></th>
            <td><?= h($event->FuzzyDateBeginYear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateEndDay') ?></th>
            <td><?= h($event->FuzzyDateEndDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateEndMonth') ?></th>
            <td><?= h($event->FuzzyDateEndMonth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FuzzyDateEndYear') ?></th>
            <td><?= h($event->FuzzyDateEndYear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ResonanceLevel') ?></th>
            <td><?= h($event->ResonanceLevel) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('DateBegin') ?></th>
            <td><?= h($event->DateBegin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateEnd') ?></th>
            <td><?= h($event->DateEnd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Years') ?></th>
            <td><?= h($event->Years) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person Id') ?></th>
            <td><?= h($event->person_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($event->Description)); ?>
    </div>
</div>
