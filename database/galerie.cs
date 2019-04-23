using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Galerie
    public class Galerie
    {
        #region Member Variables
        protected int _id_image;
        protected int _id_user;
        protected string _image;
        protected string _commentaire;
        #endregion
        #region Constructors
        public Galerie() { }
        public Galerie(int id_user, string image, string commentaire)
        {
            this._id_user=id_user;
            this._image=image;
            this._commentaire=commentaire;
        }
        #endregion
        #region Public Properties
        public virtual int Id_image
        {
            get {return _id_image;}
            set {_id_image=value;}
        }
        public virtual int Id_user
        {
            get {return _id_user;}
            set {_id_user=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        public virtual string Commentaire
        {
            get {return _commentaire;}
            set {_commentaire=value;}
        }
        #endregion
    }
    #endregion
}