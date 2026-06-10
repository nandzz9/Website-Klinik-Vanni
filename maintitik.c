/************************************/
/* Program   : maintitik.c */
/* Deskripsi : Aplikasi Driver Modul Titik */
/* NIM/Nama  : 24060123140207/Gian Zidni Ilman*/
/* Tanggal   : Senin, 26 Agustus 2024*/
/***********************************/
#include <stdio.h>
#include "titik.c"
#include <math.h> 

int main() {
	//kamus main
	Titik A;
	Titik B;

	//algoritma
	printf("Halo, ini driver modul Titik \n");
	makeTitik(&A);
	setAbsis(&A,1);
	setOrdinat(&A,5);
	isOrigin(A);

	printf("\nNilai absis = %d",A.absis);
	printf("\nNilai ordinat = %d",A.ordinat);
	printf("\nApakah berada di titik asal  = %d",isOrigin(A));

	refleksiSumbuX(&A);
	printf("\nHasil refleksi dengan sumbu X  = %d",A.ordinat);
	refleksiSumbuY(&A);
	printf("\nHasil refleksi dengan sumbu X  = %d",A.absis);
	Kuadran(A);
	printf("\nTitik berada di kuadran = %d",Kuadran(A));

	makeTitik(&B);
	setAbsis(&B,1);
	setOrdinat(&B,5);
    printf("\nJarak antara titik A dan B adalah: %.2f\n", Jarak(A,B));

	return 0;
}
