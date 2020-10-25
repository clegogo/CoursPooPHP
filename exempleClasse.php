<?php
class Personnage
{
   private $_force;
   private $_experience;
   private $_degats;

   public function __construct($force, $degats)
   {
       echo 'Voici le constructeur !';
       $this->setForce($force);
       $this->setDegats($degats);
       $this->_experience = 1;
   }

   public function frapper(Personnage $persoAFrapper)
   {
       $persoAFrapper->_degats += $this->_force;
   }

   public function gagnerExperience()
   {
    $this->_experience ++;
   }

   public function setForce($force)
   {
       if (!is_int($force))
       {
           trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
           return;
       }

       if ($force > 100)
       {
           trigger_error('La force d\'un personnage ne peut pas dépacer 100', E_USER_WARNING);
           return;
       }

       $this->_force = $force;
   }

   public function setDegats($degats)
   {
       if (!is_int($degats))
       {
           trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
           return;
       }

       $this->_degats = $degats;
   }

   public function setExperience($experience)
   {
    if (!is_int($experience))
    {
        trigger_error('L\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
        return;
    }

    
    if ($experience > 100)
    {
        trigger_error('L\'experience d\'un personnage ne peut pas dépacer 100', E_USER_WARNING);
        return;
    }

    $this->_experience = $experience;
   }

   public function degats()
   {
       return $this->_degats;
   }

   public function force()
   {
       return $this->_force;
   }

   public function experience()
   {
       return $this->_experience;
   }
}

$perso1 = new Personnage(60, 0);
$perso2 = new Personnage(100, 10);



echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';
