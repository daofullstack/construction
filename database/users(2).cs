using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _id;
        protected string _nom;
        protected string _prenom;
        protected string _telephone;
        protected int _experience;
        protected string _competences;
        protected string _email;
        protected string _photo;
        protected string _commune;
        protected bool _disponible;
        protected string _password;
        protected int _type_user;
        protected string _niveau;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string nom, string prenom, string telephone, int experience, string competences, string email, string photo, string commune, bool disponible, string password, int type_user, string niveau)
        {
            this._nom=nom;
            this._prenom=prenom;
            this._telephone=telephone;
            this._experience=experience;
            this._competences=competences;
            this._email=email;
            this._photo=photo;
            this._commune=commune;
            this._disponible=disponible;
            this._password=password;
            this._type_user=type_user;
            this._niveau=niveau;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Prenom
        {
            get {return _prenom;}
            set {_prenom=value;}
        }
        public virtual string Telephone
        {
            get {return _telephone;}
            set {_telephone=value;}
        }
        public virtual int Experience
        {
            get {return _experience;}
            set {_experience=value;}
        }
        public virtual string Competences
        {
            get {return _competences;}
            set {_competences=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Photo
        {
            get {return _photo;}
            set {_photo=value;}
        }
        public virtual string Commune
        {
            get {return _commune;}
            set {_commune=value;}
        }
        public virtual bool Disponible
        {
            get {return _disponible;}
            set {_disponible=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual int Type_user
        {
            get {return _type_user;}
            set {_type_user=value;}
        }
        public virtual string Niveau
        {
            get {return _niveau;}
            set {_niveau=value;}
        }
        #endregion
    }
    #endregion
}