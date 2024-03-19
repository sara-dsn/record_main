<?php
namespace App\EventSubscriber;

use App\Entity\Contact;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactSubscriber implements EventSubscriber
{
    private $mailer;

    public function __construct(MailerInterface $mailer){
        $this->mailer = $mailer;
    }

    // getSubscribedEvents() - cette méthode retourne un tableau d'événements auxquels le subscriber
    //  doit s'abonner. L'événement est associé à la méthode postPersist() dans le Subscriber.
    public function getSubscribedEvents(){
        //Retourne un tableau d'évènements (prePersist, postPersist, preUpdate, ect..):
        return [
        // évènement déclenché après l'insertion dans la base de données:
        Events::postPersist,
        // Events::preUpdate,
        ];
    }

public function postPersist(LifecycleEventArgs $args){

// $args->Object(); Nous retourne l'entité concerné par le postPersist
$entity = $args->getObject();

    // vérification si l'entité est un nouvel objet de type contacte
    // si l'objet persisté n'est pas de type contyact,
    //  on ne veut pas que le subscriber se déclenche: 
if($entity instanceof \App\Entity\Contact){
    $objet = $entity->getSujet();
    $message=$entity->getMessage();
//Si l'objet ou le message contient "RGPD", le subscriber enverra un mail à l'adresse "sara@gmail.com"
if(preg_match( "/RGPD\b/i", $objet)|| preg_match("/rgpd\b/i" , $message)){
    $email =(new Email())
    ->from('sara@gmail.com')
    ->to('client@gmail.com')
    ->subject('RGPD')
    ->text("Un nouveau message en rapport avec la loi sur les RGPD vous a été envoyé! 
    L'id du message :".$entity->getId().
    " \n Objet du message : ".$entity->getSujet().
    " \n Texte du message : ".$entity->getMessage());
    $this->mailer->send($email);
}
}
}
// public function preUpdate(LifecycleEventArgs $args){
// $entity= $args->getObject() ;

// if($entity instanceof \App\Entity\Contact){

// }
    

// }

}