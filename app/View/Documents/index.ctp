<h1>Documents</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $documents array, printing out document info -->

    <?php foreach ($documents as $document): ?>
    <tr>
        <td><?php echo $document['Document']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($document['Document']['title'], array('controller' => 'documents', 'action' => 'view', $document['Document']['id'])); ?>
        </td>
        <td><?php echo $document['Document']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($document); ?>
</table>
